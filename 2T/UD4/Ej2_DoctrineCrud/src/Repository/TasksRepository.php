<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class TasksRepository extends EntityRepository
{
    public function deleteTask($id)
    {
        $task = $this->find($id);

        if ($task) {
            $this->_em->remove($task);
            $this->_em->flush();
        }
    }

    public function updateTask($id)
    {
        $task = $this->find($id);

        if ($task) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $task->setTitulo($_POST['title']);
                // $task->setFecha_creacion($_POST['creationDate']);

                $this->_em->persist($task);
                $this->_em->flush();
            }
        }
    }

    public function insertTask()
    {
    }
}
