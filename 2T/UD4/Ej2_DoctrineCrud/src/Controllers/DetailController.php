<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class DetailController extends AbstractController
{
    public function showDetail($id)
    {
        $em = (new EntityManager())->get();
        $tasksRepository = $em->getRepository(Tasks::class);

        $this->render("detail.html.twig", [
            "task" => $tasksRepository->find($id)
        ]);
    }
}
