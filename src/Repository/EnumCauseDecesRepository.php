<?php

namespace App\Repository;

use App\Entity\EnumCauseDeces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnumCauseDeces|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnumCauseDeces|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnumCauseDeces[]    findAll()
 * @method EnumCauseDeces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnumCauseDecesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnumCauseDeces::class);
    }

    // /**
    //  * @return EnumCauseDeces[] Returns an array of EnumCauseDeces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnumCauseDeces
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
