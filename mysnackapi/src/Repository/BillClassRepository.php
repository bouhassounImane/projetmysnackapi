<?php

namespace App\Repository;

use App\Entity\BillClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BillClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method BillClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method BillClass[]    findAll()
 * @method BillClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BillClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BillClass::class);
    }

    // /**
    //  * @return BillClass[] Returns an array of BillClass objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BillClass
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
