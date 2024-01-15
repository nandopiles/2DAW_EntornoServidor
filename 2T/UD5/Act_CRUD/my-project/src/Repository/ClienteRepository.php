<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
     * @return void
     */
    public function updateClient(int $id): void
    {
        $client = $this->find($id);

        if ($client) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $this->setClientData($client, $_POST);

                $this->_em->persist($client);
                $this->_em->flush();
            }
        }
    }

    /**
     * Sets all the data specified on the post signal in the client specified.
     *
     * @param  Client $client
     * @param  array $data
     * @return void
     */
    public function setClientData(Cliente $client, array $data): void
    {
        $client
            ->setNombre($data['name'])
            ->setDirec($data['address'])
            ->setCiudad($data['city'])
            ->setEstado($data['state'])
            ->setCodPostal($data['zipCode'])
            ->setArea($data['area'])
            ->setTelefono($data['phone'])
            ->setReprCod($data['reprCode'])
            ->setLimiteCredito($data['creditLimit'])
            ->setObservaciones($data['remarks']);
    }
}
