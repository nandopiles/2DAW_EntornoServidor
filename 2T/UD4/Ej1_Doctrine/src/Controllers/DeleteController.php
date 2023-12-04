<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class DeleteController extends AbstractController
{
   public function delete($id)
   {
      $em = (new EntityManager())->get();
      $tasksRepository = $em->getRepository(Tasks::class);
      $task = $tasksRepository->find($id);
      if ($task) $em->remove($task);
      $em->flush();

      $this->render('list.html.twig', [
         "results" => $tasksRepository->findAll()
      ]);
   }
}
