<?php

namespace App\Repository;

use App\Entity\Aisshyptype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aisshyptype|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aisshyptype|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aisshyptype[]    findAll()
 * @method Aisshyptype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AisshyptypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aisshyptype::class);
    }

    // /**
    //  * @return Aisshyptype[] Returns an array of Aisshyptype objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aisshyptype
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
