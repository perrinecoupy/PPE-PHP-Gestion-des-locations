<?php

namespace App\Repository;

use App\Entity\ResidenceId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResidenceId|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResidenceId|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResidenceId[]    findAll()
 * @method ResidenceId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResidenceIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResidenceId::class);
    }

    // /**
    //  * @return ResidenceId[] Returns an array of ResidenceId objects
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
    public function findOneBySomeField($value): ?ResidenceId
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
