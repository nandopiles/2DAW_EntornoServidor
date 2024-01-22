<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\Emp;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    protected $entityManager;
    protected $clientRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->setClientRepository($this->getEntityManager()->getRepository(Cliente::class));
    }

    /**
     * Displays all the clients saved in the database.
     *
     * @param  EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route('/client/list', name: 'app_clients')]
    public function listClients(): Response
    {
        $clients = $this->getClientRepository()->findAll();

        return $this->render('clientsList.html', [
            "clients" => $clients
        ]);
    }

    /**
     * Shows all the info related to the client selected.
     *
     * @param  EntityManagerInterface $entityManager
     * @param  integer $id
     * @return Response
     */
    #[Route('/client/detail/{id}', name: 'app_detailClient')] // Fetches via primary key because {id} is in the route
    public function showDetailClient(Cliente $clientSelected): Response
    {
        return $this->render('detail.html', [
            "client" => $clientSelected,
            "emp" => $clientSelected->getReprCod()
        ]);
    }

    /**
     * Updates a client by its id.
     *
     * @param  integer $id
     * @return Response
     */
    #[Route('/client/update/{id}', methods: ['POST'], name: 'update_client')]
    public function update(Cliente $client, Request $request): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $this->getClientRepository()->updateClient($client, $request);

        return $this->render("update.html", [
            "client" => $client,
            "employees" => $empRepository->findAll()
        ]);
    }

    /**
     * Inserts a new client.
     *
     * @return Response
     */
    #[Route('/client/insert', methods: ['GET', 'POST'], name: 'insert_client')] // Only accepts GET and POST requests
    public function insert(Request $request): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $this->getClientRepository()->insertClient($request);

        if ($request->isMethod('GET')) { // when the user click to the <a> link it will emit a GET request so u have to catch it here
            return $this->render("insert.html", [
                "employees" => $empRepository->findAll()
            ]);
        } else // if it's not a GET request it will be a POST request so it will be displayed the clients list
            return $this->redirectToRoute('app_clients', [
                "clients" => $this->getClientRepository()->findAll()
            ]);
    }

    /**
     * Deletes a client by its id.
     *
     * @param  number $id
     * @return void
     */
    #[Route('/client/delete/{id}', name: 'delete_client')]
    public function delete(Cliente $client): Response
    {
        $this->getClientRepository()->deleteClient($client);

        return $this->redirectToRoute('app_clients', [
            "clients" => $this->getClientRepository()->findAll()
        ]);
    }

    /**
     * Get the value of entityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * Set the value of entityManager
     *
     * @return  self
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;

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
