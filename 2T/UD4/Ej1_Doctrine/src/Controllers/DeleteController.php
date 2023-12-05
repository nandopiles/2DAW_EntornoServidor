<?php

namespace App\Controllers;

use App\Entity\Tasks;
use App\Core\EntityManager;

class DeleteController
{
   public function delete($id)
   {
      $em = (new EntityManager())->get();
      $tasksRepository = $em->getRepository(Tasks::class);
      $task = $tasksRepository->find($id);
      if ($task) $em->remove($task);
      $em->flush();

      header("location: http://localhost/UD4/Ej1_Doctrine/public/Index.php/list");
   }
}
