<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Etat;
use App\Entity\Note;
use App\Entity\Tag;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/dashboard/note', name: 'app_dashboard_note')]
    public function dashboardAdmin(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        // Récupération des paramètres de filtrage
        $etatFilter = $request->query->get('etat');
        $tagsFilter = $request->query->get('tags');  // Récupère le tableau de tags
        $orderFilter = $request->query->get('order');

        // Initialisation de la requête pour toutes les notes de l'utilisateur
        $queryBuilder = $em->getRepository(Note::class)->createQueryBuilder('n')
            ->leftJoin('n.etat', 'e')
            ->leftJoin('n.tags', 't')
            ->addSelect('e', 't')
            ->where('n.user = :user')
            ->setParameter('user', $user);

        // Filtrage par état
        if ($etatFilter) {
            $queryBuilder->andWhere('e.nom = :etat')
                         ->setParameter('etat', $etatFilter);
        }

        // Filtrage par plusieurs tags
        if ($tagsFilter && !empty($tagsFilter)) {
            $queryBuilder->andWhere('t.nom IN (:tags)')
                         ->setParameter('tags', $tagsFilter);
        }

        // Tri par ordre alphabétique
        if ($orderFilter === 'asc') {
            $queryBuilder->orderBy('n.titre', 'ASC');
        } elseif ($orderFilter === 'desc') {
            $queryBuilder->orderBy('n.titre', 'DESC');
        }

        // Exécution de la requête et récupération des notes filtrées
        $notes = $queryBuilder->getQuery()->getResult();

        // Notes urgentes (filtrées)
        $notesUrgentes = $em->createQueryBuilder()
            ->select('n')
            ->from(Note::class, 'n')
            ->join('n.tags', 't')
            ->where('t.nom = :tag')
            ->setParameter('tag', 'Urgent')
            ->getQuery()
            ->getResult();

        // Notes "En cours" (filtrées)
        $notesEnCours = $em->createQueryBuilder()
            ->select('n')
            ->from(Note::class, 'n')
            ->join('n.etat', 'e')
            ->where('e.nom = :etat')
            ->setParameter('etat', 'En cours')
            ->getQuery()
            ->getResult();

        return $this->render('dashboard/note.html.twig', [
            'notes_utilisateur' => $notes,
            'notes_urgentes' => $notesUrgentes,
            'notes_en_cours' => $notesEnCours,
            'etats' => $em->getRepository(Etat::class)->findAll(),
            'tags' => $em->getRepository(Tag::class)->findAll(),
            'selectedEtat' => $etatFilter,
            'selectedTags' => $tagsFilter,  // Passer le tableau de tags sélectionnés
            'selectedOrder' => $orderFilter,
        ]);
    }
}





