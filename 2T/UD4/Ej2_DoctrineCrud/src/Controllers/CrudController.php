<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Core\Interfaces\IHeader;
use App\Entity\Tasks;

class CrudController extends AbstractController implements IHeader
{
    protected $em;
    protected $tasksRepository;

    // here works with constructor but in 
    public function __construct()
    {
        $this->setEm((new EntityManager())->get());
        $this->setTasksRepository($this->getEm()->getRepository(Tasks::class));
    }

    public function delete($id)
    {
        $this->getTasksRepository()->deleteTask($id);
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/list");
    }

    public function update($id)
    {
        $task = $this->getTasksRepository()->find($id);

        if ($task) {
            // $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/update/{$id}");
            // $em = (new EntityManager())->get();
            // $tasksRepository = $em->getRepository(Tasks::class);
            $this->render("update.html.twig", ["task" => $task]); // PROBLEM WITH LOAD, cuando le de click a submit => taskrepo
        }
        // $this->getTasksRepository()->updateTask($id);
        // $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/list");
    }

    public function insert()
    {
        // complete the insert function in TaskRepo too.
        $this->getTasksRepository()->insertTask();
    }

    /**
     * Redirects the location to the url passed by parameter.
     *
     * @param  String $url
     * @return void
     */
    public function redirectTo($url)
    {
        header("location: " . $url);
    }

    /**
     * Get the value of tasksRepository
     */
    public function getTasksRepository()
    {
        return $this->tasksRepository;
    }

    /**
     * Set the value of tasksRepository
     *
     * @return  self
     */
    public function setTasksRepository($tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;

        return $this;
    }

    /**
     * Set the value of em
     *
     * @return  self
     */
    public function setEm($em)
    {
        $this->em = $em;

        return $this;
    }

    /**
     * Get the value of em
     */
    public function getEm()
    {
        return $this->em;
    }
}
