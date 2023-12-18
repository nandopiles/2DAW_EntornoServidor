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
                $client
                    ->setCLIENTE_COD($_POST['clientCode'])
                    ->setNOMBRE($_POST['name'])
                    ->setDIREC($_POST['address'])
                    ->setCIUDAD($_POST['city'])
                    ->setESTADO($_POST['state'])
                    ->setCOD_POSTAL($_POST['zipCode'])
                    ->setAREA($_POST['area'])
                    ->setTELEFONO($_POST['phone'])
                    ->setREPR_COD($_POST['reprCode'])
                    ->setLIMITE_CREDITO($_POST['creditLimit'])
                    ->setOBSERVACIONES($_POST['remarks']);

                $this->_em->persist($client);
                $this->_em->flush();
            }
        }
    }

    /* *
     * Inserts a new client with the data obtained by the form into the database. 
     *
     * @return number the id of the new client.
     */
    /* public function insertclient()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $modifiedDate = $this->getCurrentDate();
            $client = new client();

            $client
                ->setTitulo($_POST['title'])
                ->setDescripcion("")
                ->setFecha_creacion($modifiedDate)
                ->setFecha_vencimiento($modifiedDate);

            $this->_em->persist($client);
            $this->_em->flush();

            return $client->getId();
        }
    } */
}
