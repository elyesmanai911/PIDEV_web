<?php

namespace App\Repository;

use App\Entity\Rdv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rdv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rdv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rdv[]    findAll()
 * @method Rdv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RdvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rdv::class);
    }

    // /**
    //  * @return Rdv[] Returns an array of Rdv objects
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


    public function verif($value,$id): ?Rdv
    {
        return $this->createQueryBuilder('r')
            ->where( "r.date = :val" )
            ->andWhere('r.coach = :id')
            ->setMaxResults(1)
            ->setParameter('val', $value)
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function verifRDV($id): ?Rdv
    {
        return $this->createQueryBuilder('r')
            ->where( "r.user = :id" )
            ->andWhere('r.isVerified = :val')
            ->setMaxResults(1)
            ->setParameter('id', $id)
            ->setParameter('val', false)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

}
