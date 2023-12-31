<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * Renders the default template without any data.
     *
     * @return Response
     */
    #[Route('/', name: 'main_window')]
    public function loadTemplate(): Response
    {
        return $this->render("layout.html", []);
    }
}
