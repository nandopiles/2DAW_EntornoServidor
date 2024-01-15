<?php

namespace App\Controller;

use App\Entity\Cliente;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    #[Route('/client/list', name: 'app_clients')]
    /**
     * Displays all the clients saved in the database.
     *
     * @param  EntityManagerInterface $entityManager
     * @return Response
     */
    public function listClients(EntityManagerInterface $entityManager): Response
    {
        $clientRepository = $entityManager->getRepository(Cliente::class);
        $clients = $clientRepository->findAll();

        return $this->render('clientsList.html', [
            "clients" => $clients
        ]);
    }
}
