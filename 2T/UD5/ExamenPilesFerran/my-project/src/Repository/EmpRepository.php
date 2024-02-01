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
     * Updates the emp with the given id with the new data obtained by the form into the database.
     *
     * @param  integer $id
     * @param  Request $request
     * @return void
     */
    public function updateEmp(Emp $emp, Emp $newDataEmp): void
    {
        $emp = $newDataEmp;

        $this->_em->persist($emp);
        $this->_em->flush();
    }

    /**
     * Inserts a new emp with the data obtained by the form into the database. 
     *
     * @return void 
     */
    public function insertEmp(Emp $newDataEmp)
    {
        $newEmp = new Emp();

        $newEmp = $newDataEmp;

        $this->_em->persist($newEmp);
        $this->_em->flush();
    }
}
