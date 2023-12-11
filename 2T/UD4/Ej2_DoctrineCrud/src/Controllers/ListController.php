<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class ListController extends AbstractController
{
   public function list($page = null)
   {
      $em = (new EntityManager())->get();
      $tasksRepository = $em->getRepository(Tasks::class);
      $this->render("index.html.twig", [
         "results" => $tasksRepository->findAll()
      ]);
   }
}
