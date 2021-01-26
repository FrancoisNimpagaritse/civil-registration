<?php

namespace App\Repository;

use App\Entity\NaissanceMereInexistant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NaissanceMereInexistant|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaissanceMereInexistant|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaissanceMereInexistant[]    findAll()
 * @method NaissanceMereInexistant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaissanceMereInexistantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaissanceMereInexistant::class);
    }

    // /**
    //  * @return NaissanceMereInexistant[] Returns an array of NaissanceMereInexistant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NaissanceMereInexistant
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
