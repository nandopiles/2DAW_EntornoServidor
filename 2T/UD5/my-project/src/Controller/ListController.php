<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;


class ListController extends AbstractController
{
    /**
     * Renders the template used for listing all the clients from the Clients table.
     *
     * @param  EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route('/clients/list', name: 'list_clients')]
    public function listClients(EntityManagerInterface $entityManager): Response
    {
        $clientRepository = $entityManager->getRepository(Client::class);
        $clients = $clientRepository->findAll();

        return $this->render('clientsList.html', [
            'clients' => $clients,
        ]);
    }
}
