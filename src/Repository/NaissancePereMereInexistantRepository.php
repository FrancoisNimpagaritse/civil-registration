<?php

namespace App\Repository;

use App\Entity\NaissancePereMereInexistant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NaissancePereMereInexistant|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaissancePereMereInexistant|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaissancePereMereInexistant[]    findAll()
 * @method NaissancePereMereInexistant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaissancePereMereInexistantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaissancePereMereInexistant::class);
    }

    // /**
    //  * @return NaissancePereMereInexistant[] Returns an array of NaissancePereMereInexistant objects
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
    public function findOneBySomeField($value): ?NaissancePereMereInexistant
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
