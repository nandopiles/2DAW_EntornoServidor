<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Client;

class DetailController extends AbstractController
{

    /**
     * Renders the template associated to show the detail of a specific client.
     *
     * @param  number $id
     * @return void
     */
    public function showDetail($id)
    {
        $em = (new EntityManager())->get();
        $clientRepository = $em->getRepository(Client::class);

        $this->render("detail.html", [
            "client" => $clientRepository->find($id)
        ]);
    }
}
