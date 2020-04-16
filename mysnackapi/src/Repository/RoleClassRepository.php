<?php

namespace App\Repository;

use App\Entity\RoleClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RoleClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleClass[]    findAll()
 * @method RoleClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleClassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleClass::class);
    }

    // /**
    //  * @return RoleClass[] Returns an array of RoleClass objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoleClass
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
