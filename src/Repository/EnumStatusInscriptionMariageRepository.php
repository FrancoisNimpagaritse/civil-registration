<?php

namespace App\Repository;

use App\Entity\EnumStatusInscriptionMariage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnumStatusInscriptionMariage|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnumStatusInscriptionMariage|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnumStatusInscriptionMariage[]    findAll()
 * @method EnumStatusInscriptionMariage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnumStatusInscriptionMariageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnumStatusInscriptionMariage::class);
    }

    // /**
    //  * @return EnumStatusInscriptionMariage[] Returns an array of EnumStatusInscriptionMariage objects
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
    public function findOneBySomeField($value): ?EnumStatusInscriptionMariage
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
