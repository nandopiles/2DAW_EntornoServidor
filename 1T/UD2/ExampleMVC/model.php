<?php

class Model
{
    private $tasks = [];

    public function __construct()
    {
        // simulamos algunas tareas iniciales
        $this->tasks[] = "Hacer compras";
        $this->tasks[] = "Hacer ejercicios";
    }

    /**
     * Get the value of tasks
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */
    public function addTasks($task)
    {
        $this->tasks[] = $task;
    }
}
