<?php

namespace App\Repository;

use App\Entity\PermissionClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PermissionClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method PermissionClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method PermissionClass[]    findAll()
 * @method PermissionClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermissionClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PermissionClass::class);
    }

    // /**
    //  * @return PermissionClass[] Returns an array of PermissionClass objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PermissionClass
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
