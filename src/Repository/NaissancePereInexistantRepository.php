<?php

namespace App\Repository;

use App\Entity\NaissancePereInexistant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NaissancePereInexistant|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaissancePereInexistant|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaissancePereInexistant[]    findAll()
 * @method NaissancePereInexistant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaissancePereInexistantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaissancePereInexistant::class);
    }

    // /**
    //  * @return NaissancePereInexistant[] Returns an array of NaissancePereInexistant objects
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
    public function findOneBySomeField($value): ?NaissancePereInexistant
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
