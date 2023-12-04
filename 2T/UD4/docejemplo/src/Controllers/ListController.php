<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Users;
use App\Core\EntityManager;

class ListController extends AbstractController
{
   public function listado($page = null)
   {
      $em = (new EntityManager())->get();
      $usersRepository = $em->getRepository(Users::class);
      $this->render("list.html.twig", [
         "resultados" => $usersRepository->findAll()
      ]);
   }

}
