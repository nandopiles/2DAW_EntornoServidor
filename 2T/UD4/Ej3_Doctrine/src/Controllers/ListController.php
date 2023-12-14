<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Client;
use App\Entity\Emp;

class ListController extends AbstractController
{

   /**
    * Renders the template used for listing all the tasks.
    *
    * @return void
    */
   public function list()
   {
      $em = (new EntityManager())->get();
      $empRepository = $em->getRepository(Emp::class);
      $clientRepository = $em->getRepository(Client::class);
      
      $this->render("list.html.twig", [
         "empResults" => $empRepository->findAll(),
         "clientResults" => $clientRepository->findAll()
      ]);
   }
}
