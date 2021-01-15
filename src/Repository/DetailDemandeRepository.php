<?php

namespace App\Repository;

use App\Entity\DetailDemande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailDemande|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailDemande|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailDemande[]    findAll()
 * @method DetailDemande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailDemandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailDemande::class);
    }

    // /**
    //  * @return DetailDemande[] Returns an array of DetailDemande objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetailDemande
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
