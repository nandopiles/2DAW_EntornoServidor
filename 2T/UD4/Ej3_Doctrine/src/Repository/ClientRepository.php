<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository
{
    /**
     * Deletes the client that matches with the id given by parameter.
     *
     * @param  number $id
     * @return void
     */
    public function deleteClient($id)
    {
        $client = $this->find($id);

        if ($client) {
            $this->_em->remove($client);
            $this->_em->flush();
        }
    }

    /**
     * Updates the client with the given id with the new data obtained by the form into the database. 
     *
     * @param  number $id
     * @return void
     */
    public function updateClient($id)
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
     * Inserts a new client with the data obtained by the form into the database. 
     *
     * @return number the id of the new client.
     */
    public function insertClient()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $newClient = new client();

            $this->setClientData($newClient, $_POST);

            $this->_em->persist($newClient);
            $this->_em->flush();
        }
    }

    /**
     * Sets all the data specified on the post signal in the client specified.
     *
     * @param  Client $client
     * @param  array $data
     * @return void
     */
    public function setClientData(Client $client, array $data)
    {
        $client
            ->setCLIENTE_COD($data['clientCode'])
            ->setNOMBRE($data['name'])
            ->setDIREC($data['address'])
            ->setCIUDAD($data['city'])
            ->setESTADO($data['state'])
            ->setCOD_POSTAL($data['zipCode'])
            ->setAREA($data['area'])
            ->setTELEFONO($data['phone'])
            ->setREPR_COD($data['reprCode'])
            ->setLIMITE_CREDITO($data['creditLimit'])
            ->setOBSERVACIONES($data['remarks']);
    }
}
