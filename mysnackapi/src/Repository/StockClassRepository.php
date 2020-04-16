<?php

namespace App\Repository;

use App\Entity\StockClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StockClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockClass[]    findAll()
 * @method StockClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockClass::class);
    }

    // /**
    //  * @return StockClass[] Returns an array of StockClass objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StockClass
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
