<?php

namespace App\Repository;

use App\Entity\Colline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Colline|null find($id, $lockMode = null, $lockVersion = null)
 * @method Colline|null findOneBy(array $criteria, array $orderBy = null)
 * @method Colline[]    findAll()
 * @method Colline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Colline::class);
    }

    // /**
    //  * @return Colline[] Returns an array of Colline objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Colline
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
