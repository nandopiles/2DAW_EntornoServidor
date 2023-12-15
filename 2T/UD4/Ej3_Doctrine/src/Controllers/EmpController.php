<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Emp;

class EmpController extends AbstractController
{
    /**
     * Renders the template used for listing all the tasks from the Employees table.
     *
     * @return void
     */
    public function listEmployees()
    {
        $em = (new EntityManager())->get();
        $empRepository = $em->getRepository(Emp::class);

        $this->render("employeesList.html", [
            "empResults" => $empRepository->findAll()
        ]);
    }
}
