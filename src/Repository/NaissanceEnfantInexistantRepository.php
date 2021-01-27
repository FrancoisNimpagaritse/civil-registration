<?php

namespace App\Repository;

use App\Entity\NaissanceEnfantInexistant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NaissanceEnfantInexistant|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaissanceEnfantInexistant|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaissanceEnfantInexistant[]    findAll()
 * @method NaissanceEnfantInexistant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaissanceEnfantInexistantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaissanceEnfantInexistant::class);
    }

    // /**
    //  * @return NaissanceEnfantInexistant[] Returns an array of NaissanceEnfantInexistant objects
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
    public function findOneBySomeField($value): ?NaissanceEnfantInexistant
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
