<?php 

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\DataBase;
use App\Models\Tareas;

class DetailController extends AbstractController
{
   public function detalleTarea($id){
      $tareas = new Tareas(new DataBase());
      $this->render("detail.html", [
         "resultados" => $tareas->findById($id)
      ]);
   }
  }