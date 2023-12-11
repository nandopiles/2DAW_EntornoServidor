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
            $actualDate = new \DateTime();
            $task->setFecha_creacion($actualDate);

            $this->_em->persist($task);
            $this->_em->flush();
        }
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
}
