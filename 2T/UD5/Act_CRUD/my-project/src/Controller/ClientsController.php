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
    #[Route('/client/detail/{id}', name: 'app_detailClient')]
    public function showDetailClient(EntityManagerInterface $entityManager, int $id): Response
    {
        $empRepository = $entityManager->getRepository(Emp::class);

        $clientSelected = $this->getClientRepository()->find($id);

        return $this->render('detail.html', [
            "client" => $clientSelected,
            "emp" => $empRepository->find($clientSelected->getReprCod())
        ]);
    }

    /**
     * Updates a client by its id.
     *
     * @param  integer $id
     * @return void
     */
    #[Route('/client/update/{id}', name: 'update_client')]
    public function update(int $id, Request $request): Response
    {
        $empRepository = $this->getEntityManager()->getRepository(Emp::class);

        $this->getClientRepository()->updateClient($id, $request);

        return $this->render("update.html", [
            "client" => $this->getClientRepository()->find($id),
            "employees" => $empRepository->findAll()
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
