<?php

namespace App\Controller;

use App\Entity\Cliente;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClienteController extends AbstractController
{
    protected $entityManager;
    protected $clienteRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->setEntityManager($entityManager);
        $this->setClienteRepository($this->getEntityManager()->getRepository(Cliente::class));
    }

    #[Route('/client/list', name: 'app_cliente')]
    public function listClients(): Response
    {
        $clients = $this->getClienteRepository()->findAll();

        return $this->render('clientsList.html', [
            "clients" => $clients
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
     * Get the value of clienteRepository
     */
    public function getClienteRepository()
    {
        return $this->clienteRepository;
    }

    /**
     * Set the value of clienteRepository
     *
     * @return  self
     */
    public function setClienteRepository($clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;

        return $this;
    }
}
