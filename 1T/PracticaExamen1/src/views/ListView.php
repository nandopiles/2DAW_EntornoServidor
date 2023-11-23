<?php

namespace Ferran\App\Views;

class ListView
{
    /**
     * Prints the information with a table format
     *
     * @param  Array $data
     * @return void
     */
    public function printHTML(array $data)
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('index.html', ['users' => $data]);
    }
}
