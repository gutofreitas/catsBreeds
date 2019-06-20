<?php

namespace App\Repository;

use App\Entity\Breeds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Breeds|null find($id, $lockMode = null, $lockVersion = null)
 * @method Breeds|null findOneBy(array $criteria, array $orderBy = null)
 * @method Breeds[]    findAll()
 * @method Breeds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreedsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Breeds::class);
    }

    // /**
    //  * @return Breeds[] Returns an array of Breeds objects
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
    public function findOneBySomeField($value): ?Breeds
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
