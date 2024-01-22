<?php

namespace App\Repository;

use App\Entity\Cliente;
use App\Entity\Emp;
use App\Repository\EmpRepository;
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
    public function updateClient(Cliente $client, Request $request, EntityManagerInterface $entityManager): void
    {
        $this->setClientData($client, $request->request->all(), $entityManager);

        $this->_em->persist($client);
        $this->_em->flush();
    }

    /**
     * Inserts a new client with the data obtained by the form into the database. 
     *
     * @return void 
     */
    public function insertClient(Request $request, EntityManagerInterface $entityManager)
    {
        $newClient = new Cliente();

        $this->setClientData($newClient, $request->request->all(), $entityManager);

        $this->_em->persist($newClient);
        $this->_em->flush();
    }

    /**
     * Sets all the data specified on the post signal in the client specified.
     *
     * @param  Client $client
     * @param  array $data
     * @return void
     */
    public function setClientData(Cliente $client, array $data, EntityManagerInterface $entityManager): void
    {
        $empRepository = $entityManager->getRepository(Emp::class);

        $client
            ->setNombre($data['name'])
            ->setDirec($data['address'])
            ->setCiudad($data['city'])
            ->setEstado($data['state'])
            ->setCodPostal($data['zipCode'])
            ->setArea($data['area'])
            ->setTelefono($data['phone'])
            ->setReprCod($empRepository->findEmpById($data['reprCode']))
            ->setLimiteCredito($data['creditLimit'])
            ->setObservaciones($data['remarks']);
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
