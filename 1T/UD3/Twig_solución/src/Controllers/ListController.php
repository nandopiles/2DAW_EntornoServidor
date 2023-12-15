<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\DataBase;
use App\Models\Tareas;

class ListController extends AbstractController
{
   public function listadoTarea($page = null)
   {
      $page = $this->getLastPage($page);
      $tareas = new Tareas(new Database);
      $this->render("list.html", [
         "resultados" => $tareas->findAll(),
         "page" => $page
      ]);
   }


   private function getLastPage($page)
   {
      if ($page != null) {
         $this->sessionManager->setLastPage($page);
         return $page;
      } elseif (!is_numeric($this->sessionManager->getLastPage()) || $this->sessionManager->getLastPage() < 1) {
         $this->sessionManager->setLastPage(1);
         return 1;
      } else {
         return $this->sessionManager->getLastPage();
      }
   }
}
