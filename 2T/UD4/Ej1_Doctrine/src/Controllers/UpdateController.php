<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class UpdateController extends AbstractController
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

      $this->render('list.html.twig', [
         "results" => $tasksRepository->findAll()
      ]);
   }
}
