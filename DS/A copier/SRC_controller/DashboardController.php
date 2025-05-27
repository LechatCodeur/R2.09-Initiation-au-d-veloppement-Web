<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
    public function dashboardAdmin(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        // Notes avec état = "En cours"
        $notesEnCours = $em->createQueryBuilder()
            ->select('n')
            ->from(Note::class, 'n')
            ->join('n.etat', 'e')
            ->where('e.nom = :etat')
            ->setParameter('etat', 'En cours')
            ->getQuery()
            ->getResult();

        // Notes taguées "Urgent"
        $notesUrgentes = $em->createQueryBuilder()
            ->select('n')
            ->from(Note::class, 'n')
            ->join('n.tags', 't')
            ->where('t.nom = :tag')
            ->setParameter('tag', 'Urgent')
            ->getQuery()
            ->getResult();

        // Toutes les notes de l'utilisateur connecté
        $notes = $user->getNotes();

        // Filtrage en mémoire sur les notes "En cours"
        $etatEnCours = $em->getRepository(Etat::class)->findOneBy(['nom' => 'En cours']);
        $criteriaEtat = Criteria::create()->where(Criteria::expr()->eq('etat', $etatEnCours));
        $notesEnCours2 = $notes->matching($criteriaEtat);

        return $this->render('dashboard/note.html.twig', [
            'notes_en_cours' => $notesEnCours,
            'notes_en_cours2' => $notesEnCours2,
            'notes_urgentes' => $notesUrgentes,
            'notes_utilisateur' => $notes,
        ]);
    }
}
