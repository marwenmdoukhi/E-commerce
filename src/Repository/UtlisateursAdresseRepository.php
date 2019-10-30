<?php

namespace App\Repository;

use App\Entity\UtlisateursAdresse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UtlisateursAdresse|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtlisateursAdresse|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtlisateursAdresse[]    findAll()
 * @method UtlisateursAdresse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtlisateursAdresseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtlisateursAdresse::class);
    }

    // /**
    //  * @return UtlisateursAdresse[] Returns an array of UtlisateursAdresse objects
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
    public function findOneBySomeField($value): ?UtlisateursAdresse
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
