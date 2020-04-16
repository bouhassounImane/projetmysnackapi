<?php

namespace App\Repository;

use App\Entity\StoreClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StoreClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method StoreClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method StoreClass[]    findAll()
 * @method StoreClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoreClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StoreClass::class);
    }

    // /**
    //  * @return StoreClass[] Returns an array of StoreClass objects
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
    public function findOneBySomeField($value): ?StoreClass
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
