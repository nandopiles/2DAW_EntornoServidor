<?php

namespace App\Repository;

use App\Entity\Tasks;
use DateTime;
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
                $modifiedDate = $this->getCurrentDate();

                $task->setTitulo($_POST['title']);
                $task->setFecha_creacion($modifiedDate);

                $this->_em->persist($task);
                $this->_em->flush();
            }
        }
    }

    /**
     * Inserts a new task with the data obtained by the form into the database. 
     *
     * @return number the id of the new task.
     */
    public function insertTask()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $task = new Tasks();

            $task->setTitulo($_POST['title']);
            $task->setDescripcion("");
            $modifiedDate = $this->getCurrentDate();
            $task->setFecha_creacion($modifiedDate);
            $task->setFecha_vencimiento($modifiedDate);

            $this->_em->persist($task);
            $this->_em->flush();

            return $task->getId();
        }
    }

    /**
     * Gets the current Date in 'Y-m-d' format.
     *
     * @return DateTime
     */
    public function getCurrentDate()
    {
        $actualDate = new \DateTime();
        $formatDate = $actualDate->format('Y-m-d');

        return \DateTime::createFromFormat('Y-m-d', $formatDate);
    }
}
