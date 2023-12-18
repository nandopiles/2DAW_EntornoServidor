<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Client;

class ListController extends AbstractController
{
   /**
    * Renders the template used for listing all the clients from the Clients table.
    *
    * @return void
    */
   public function listClients()
   {
      $em = (new EntityManager())->get();
      $clientRepository = $em->getRepository(Client::class);

      $this->render("clientsList.html", [
         "clientResults" => $clientRepository->findAll()
      ]);
   }
}
