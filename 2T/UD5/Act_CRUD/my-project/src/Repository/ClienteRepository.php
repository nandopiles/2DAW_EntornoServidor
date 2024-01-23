<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

/**
 * @extends ServiceEntityRepository<Cliente>
 *
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    /**
     * Updates the client with the given id with the new data obtained by the form into the database.
     *
     * @param  integer $id
     * @param  Request $request
     * @return void
     */
    public function updateClient(Cliente $client, Cliente $newDataClient): void
    {
        $client = $newDataClient;

        $this->_em->persist($client);
        $this->_em->flush();
    }

    /**
     * Inserts a new client with the data obtained by the form into the database. 
     *
     * @return void 
     */
    public function insertClient(Cliente $newDataClient)
    {
        $newClient = new Cliente();

        $newClient = $newDataClient;

        $this->_em->persist($newClient);
        $this->_em->flush();
    }

    /**
     * Deletes the client that matches with the id given by parameter.
     *
     * @param  number $id
     * @return void
     */
    public function deleteClient(Cliente $client)
    {
        if ($client) {
            $this->_em->remove($client);
            $this->_em->flush();
        }
    }
}
