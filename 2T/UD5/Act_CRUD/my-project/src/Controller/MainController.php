<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    /**
     * Renders the main page of the template.
     *
     * @return Response
     */
    public function showMain(): Response
    {
        return $this->render('layout.html', []);
    }
}
