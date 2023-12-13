<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

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
      $tasksRepository = $em->getRepository(Tasks::class);

      $this->render("index.html.twig", [
         "results" => $tasksRepository->findAll()
      ]);
   }
}
