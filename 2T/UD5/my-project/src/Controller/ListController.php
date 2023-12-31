<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * Renders the template used for listing all the clients from the Clients table.
     *
     * @return Response
     */
    #[Route('/list')]
    public function listClients(): Response
    {
        $em = (new EntityManager())->get();
        $clientRepository = $em->getRepository(Client::class);

        return $this->render("clientsList.html", [
            "clientResults" => $clientRepository->findAll()
        ]);
    }
}
