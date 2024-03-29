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

    public function __construct()
    {
        $this->setEm((new EntityManager())->get());
        $this->setTasksRepository($this->getEm()->getRepository(Tasks::class));
    }

    /**
     * Deletes a task by its id.
     *
     * @param  number $id
     * @return void
     */
    public function delete($id)
    {
        $this->getTasksRepository()->deleteTask($id);
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/list");
    }

    /**
     * Updates a task by its id.
     *
     * @param  mixed $id
     * @return void
     */
    public function update($id)
    {
        $this->getTasksRepository()->updateTask($id);
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/detail/$id");
    }

    /**
     * Inserts a new task.
     *
     * @return void
     */
    public function insert()
    {
        $id = $this->getTasksRepository()->insertTask();
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/detail/$id");
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
