<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Core\Interfaces\IHeader;
use App\Entity\Tasks;

class CrudController implements IHeader
{
    public function delete($id)
    {
        $em = (new EntityManager())->get();
        $tasksRepository = $em->getRepository(Tasks::class);
        $task = $tasksRepository->find($id);
        if ($task) $em->remove($task);
        $em->flush();

        $this->redirectTo("http://localhost/UD4/Ej1_Doctrine/public/Index.php/list");
    }

    public function update($id)
    {
        $em = (new EntityManager())->get();

        $tasksRepository = $em->getRepository(Tasks::class);
        $task = $tasksRepository->find($id);

        $actualDate = new \DateTime();
        $formatDate = $actualDate->format('d/m/Y');
        $formatDateDatetime = \DateTime::createFromFormat('d/m/Y', $formatDate);
        $task->setFecha_creacion($formatDateDatetime);

        $em->persist($task);
        $em->flush();

        $this->redirectTo("http://localhost/UD4/Ej1_Doctrine/public/Index.php/list");
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
