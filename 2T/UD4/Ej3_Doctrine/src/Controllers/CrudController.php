<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Core\Interfaces\IHeader;
use App\Entity\Client;
use App\Entity\Emp;

class CrudController extends AbstractController implements IHeader
{
    protected $em;
    protected $clientRepository;

    public function __construct()
    {
        parent::__construct(); // I'm using the parent constructor (AbstractController)
        $this->setEm((new EntityManager())->get());
        $this->setClientRepository($this->getEm()->getRepository(Client::class));
    }

    /**
     * Deletes a client by its id.
     *
     * @param  number $id
     * @return void
     */
    /* public function delete($id)
    {
        $this->getClientRepository()->deleteClient($id);
        $this->redirectTo("http://localhost/UD4/Ej3_Doctrine/public/Index.php/");
    } */

    /**
     * Updates a client by its id.
     *
     * @param  number $id
     * @return void
     */
    public function update($id)
    {
        $empRepository = $this->getEm()->getRepository(Emp::class);

        $this->render("update.html", [
            "client" => $this->getClientRepository()->find($id),
            "employees" => $empRepository->findAll()
        ]);
        // $this->getClientRepository()->updateClient($id);
        $this->redirectTo("http://localhost/UD4/Ej3_Doctrine/public/Index.php/detail/$id");
    }

    /**
     * Inserts a new client.
     *
     * @return void
     */
    /* public function insert()
    {
        $this->getClientRepository()->insertClient();
        $this->redirectTo("http://localhost/UD4/Ej3_Doctrine/public/Index.php/");
    } */

    /**
     * Redirects the location to the url passed by parameter.
     *
     * @param  String $url
     * @return void
     */
    public function redirectTo($url)
    {
        header("location: " . $url);
    }

    /**
     * Get the value of em
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * Set the value of em
     *
     * @return  self
     */
    public function setEm($em)
    {
        $this->em = $em;

        return $this;
    }

    /**
     * Get the value of clientRepository
     */
    public function getClientRepository()
    {
        return $this->clientRepository;
    }

    /**
     * Set the value of clientRepository
     *
     * @return  self
     */
    public function setClientRepository($clientRepository)
    {
        $this->clientRepository = $clientRepository;

        return $this;
    }
}
