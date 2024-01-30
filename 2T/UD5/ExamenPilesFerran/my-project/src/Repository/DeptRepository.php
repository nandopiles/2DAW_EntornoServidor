<?php

namespace App\Repository;

use App\Entity\Dept;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dept>
 *
 * @method Dept|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dept|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dept[]    findAll()
 * @method Dept[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeptRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dept::class);
    }

//    /**
//     * @return Dept[] Returns an array of Dept objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dept
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
