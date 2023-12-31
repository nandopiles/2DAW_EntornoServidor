<?php

namespace App\Core;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    private $twig;
    protected $sessionManager;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');
        $this->twig = new \Twig\Environment($loader);
    }

    public function render($template, $params): Response
    {
        $template = $this->twig->load($template);
        $content = $template->render($params);
        return new Response($content);
    }
}
