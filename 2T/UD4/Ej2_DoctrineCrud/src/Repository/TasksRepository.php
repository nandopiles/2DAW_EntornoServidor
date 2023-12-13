<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class TasksRepository extends EntityRepository
{
    /**
     * Deletes the task that matches with the id given by parameter.
     *
     * @param  number $id
     * @return void
     */
    public function deleteTask($id)
    {
        $task = $this->find($id);

        if ($task) {
            $this->_em->remove($task);
            $this->_em->flush();
        }
    }

    /**
     * Updates the task with the given id with the new data obtained by the form into the database. 
     *
     * @param  number $id
     * @return void
     */
    public function updateTask($id)
    {
        $task = $this->find($id);

        if ($task) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $actualDate = new \DateTime();
                $formatDate = $actualDate->format('Y-m-d');
                $modifiedDate = \DateTime::createFromFormat('Y-m-d', $formatDate);

                $task->setTitulo($_POST['title']);
                $task->setFecha_creacion($modifiedDate);

                $this->_em->persist($task);
                $this->_em->flush();
            }
        }
    }

    public function insertTask()
    {
    }
}
