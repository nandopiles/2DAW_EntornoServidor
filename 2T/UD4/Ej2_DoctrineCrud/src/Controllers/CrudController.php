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
        $this->em = (new EntityManager())->get();
        $this->tasksRepository = $this->em->getRepository(Tasks::class);
    }

    public function delete($id)
    {
        $this->tasksRepository->deleteTask($id);
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/list");
    }

    public function update($id)
    {
        $this->tasksRepository->updateTask($id);
        $this->redirectTo("http://localhost/UD4/Ej2_DoctrineCrud/public/Index.php/list");
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
