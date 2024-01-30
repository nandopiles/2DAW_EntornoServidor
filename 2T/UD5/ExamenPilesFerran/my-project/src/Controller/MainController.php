<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * Renders the main page of the template.
     *
     * @return Response
     */
    #[Route('/', name: 'app_main')]
    public function showMain(): Response
    {
        return $this->render('layout.html', []);
    }
}
