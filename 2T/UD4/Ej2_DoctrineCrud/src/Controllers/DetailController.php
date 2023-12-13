<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class DetailController extends AbstractController
{
    /**
     * Renders the template used for listing the task that matches with the id given by parameter. 
     * 
     * If you don't pass the id's task the template will be ready for adding a new task.
     *
     * @param  number $id if you don't pass an id it will be ignore.
     * @return void
     */
    public function showDetail($id = null)
    {
        $em = (new EntityManager())->get();
        $tasksRepository = $em->getRepository(Tasks::class);

        if ($id !== null) {
            $this->render("detail.html.twig", [
                "task" => $tasksRepository->find($id)
            ]);
        } else
            $this->render("detail.html.twig", []);
    }
}
