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
    public function delete($id)
    {
        $this->getClientRepository()->deleteClient($id);
        $this->redirectToList();
    }

    /**
     * Updates a client by its id.
     *
     * @param  number $id
     * @return void
     */
    public function update($id)
    {
        $empRepository = $this->getEm()->getRepository(Emp::class);

        $this->getClientRepository()->updateClient($id);

        $this->render("update.html", [
            "client" => $this->getClientRepository()->find($id),
            "employees" => $empRepository->findAll()
        ]);
    }

    /**
     * Inserts a new client.
     *
     * @return void
     */
    public function insert()
    {
        $empRepository = $this->getEm()->getRepository(Emp::class);

        $this->getClientRepository()->insertClient();

        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            $this->render("insert.html", [
                "employees" => $empRepository->findAll()
            ]);
        } else
            $this->redirectToList();
    }

    /**
     * Redirects to the clients list page.
     *
     * @return void
     */
    public function redirectToList()
    {
        header("Location: http://localhost/UD4/Ej3_Doctrine/public/Index.php/clients");
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
