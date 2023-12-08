<?php

namespace App\Controllers;

use App\Entity\Tasks;
use App\Core\EntityManager;

class UpdateController
{
   public function update($id)
   {
      $em = (new EntityManager())->get();

      $tasksRepository = $em->getRepository(Tasks::class);
      $task = $tasksRepository->find($id);

      $actualDate = new \DateTime();
      $formatDate = $actualDate->format('d/m/Y');
      $formatDateDatetime = \DateTime::createFromFormat('d/m/Y', $formatDate);
      $task->setFecha_creacion($formatDateDatetime);

      $em->persist($task);
      $em->flush();

      header("location: http://localhost/UD4/Ej1_Doctrine/public/Index.php/list");
   }
}
