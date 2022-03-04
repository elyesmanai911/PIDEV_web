<?php

namespace App\Repository;

use App\Entity\Commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commande[]    findAll()
 * @method Commande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    // /**
    //  * @return Commande[] Returns an array of Commande objects
    //  */
    
    public function findTopCart()
    {
        $max =$this->createQueryBuilder('c')
        ->select('MAX(c.total)')
        ->andWhere('c.total > 0')
        ->getQuery()
        ->getResult()
        ;
        //dd($least);
        return $this->createQueryBuilder('c')
        ->select('c')
        ->andWhere('c.total = :max')
        ->setParameter('max' , $max['0'])
        ->getQuery()
        ->getResult()
        ;
    }
    public function findLeastCart()
    {
        $least =$this->createQueryBuilder('c')
        ->select('MIN(c.total)')
        ->andWhere('c.total > 0')
        ->getQuery()
        ->getResult()
        ;
        //dd($least);
        return $this->createQueryBuilder('c')
        ->select('c')
        ->andWhere('c.total = :least')
        ->setParameter('least' , $least['0'])
        ->getQuery()
        ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Commande
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
