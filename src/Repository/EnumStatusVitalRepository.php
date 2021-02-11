<?php

namespace App\Repository;

use App\Entity\EnumStatusVital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnumStatusVital|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnumStatusVital|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnumStatusVital[]    findAll()
 * @method EnumStatusVital[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnumStatusVitalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnumStatusVital::class);
    }

    // /**
    //  * @return EnumStatusVital[] Returns an array of EnumStatusVital objects
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
    public function findOneBySomeField($value): ?EnumStatusVital
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
