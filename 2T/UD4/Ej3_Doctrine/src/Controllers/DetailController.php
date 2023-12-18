<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Client;
use App\Entity\Emp;

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
        $empRepository = $em->getRepository(Emp::class);

        $clientSelected = $clientRepository->find($id);

        $this->render("detail.html", [
            "client" => $clientSelected,
            "emp" => $empRepository->find($clientSelected->getREPR_COD())
        ]);
    }
}
