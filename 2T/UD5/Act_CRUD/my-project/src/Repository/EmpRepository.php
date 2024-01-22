<?php

namespace App\Repository;

use App\Entity\Emp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Emp>
 *
 * @method Emp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emp[]    findAll()
 * @method Emp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Emp::class);
    }

    /**
     * Finds an Emp by his id.
     *
     * @param  int $empId
     * @return Emp
     */
    public function findEmpById(int $empId): ?Emp
    {
        return $this->find($empId);
    }
}
