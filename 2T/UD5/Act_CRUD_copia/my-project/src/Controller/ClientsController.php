<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\Emp;
use App\Form\ClienteType;
use App\Form\UpdateType;
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
    #[Route('/client/update/{id}', methods: ['GET', 'POST'], name: 'update_client')]
    public function update(Cliente $client, Request $request): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $myForm = $this->createForm(ClienteType::class, $client);
        $myForm->handleRequest($request);

        if ($request->isMethod('POST') && $myForm->isSubmitted() && $myForm->isValid()) {
            $data = $myForm->getData();
            $this->getClientRepository()->updateClient($client, $data);
        }

        return $this->render("update.html", [
            "client" => $client,
            "employees" => $empRepository->findAll(),
            'updateForm' => $myForm->createView()
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
        $myForm = $this->createForm(ClienteType::class);
        $myForm->handleRequest($request);

        if ($myForm->isSubmitted() && $myForm->isValid()) {
            // If it's POST it will insert the new client.
            $data = $myForm->getData();
            $this->getClientRepository()->insertClient($data);

            return $this->redirectToRoute('app_clients', [
                "clients" => $this->getClientRepository()->findAll()
            ]);
        }

        // If it's GET it will display the "insert" template.
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        return $this->render("insert.html", [
            "employees" => $empRepository->findAll(),
            'insertForm' => $myForm->createView()
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
