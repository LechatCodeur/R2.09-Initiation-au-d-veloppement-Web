<?php

namespace App\Repository;

use App\Entity\Note;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Note>
 */
class NoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Note::class);
    }

    public function findAllFiltered($etatFilter, $tagFilter, $orderFilter)
    {
        $queryBuilder = $this->createQueryBuilder('n')
            ->leftJoin('n.etat', 'e')
            ->leftJoin('n.tags', 't')
            ->addSelect('e', 't');

        // Filtrer par état
        if ($etatFilter) {
            $queryBuilder->andWhere('e.nom = :etat')
                         ->setParameter('etat', $etatFilter);
        }

        // Filtrer par tag
        if ($tagFilter) {
            $queryBuilder->andWhere('t.nom = :tag')
                         ->setParameter('tag', $tagFilter);
        }

        // Trier par ordre
        if ($orderFilter === 'asc') {
            $queryBuilder->orderBy('n.titre', 'ASC');
        } elseif ($orderFilter === 'desc') {
            $queryBuilder->orderBy('n.titre', 'DESC');
        }

        return $queryBuilder->getQuery()->getResult();
    }
}
