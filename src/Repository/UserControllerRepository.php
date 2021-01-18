<?php

namespace App\Repository;

use App\Entity\UserController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserController|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserController|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserController[]    findAll()
 * @method UserController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserController::class);
    }

    // /**
    //  * @return UserController[] Returns an array of UserController objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserController
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
