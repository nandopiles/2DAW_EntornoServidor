<?php

namespace App\Controllers;

use App\Core\AbstractController;

class MainController extends AbstractController
{
    /**
     * Renders the default template without any data.
     *
     * @return void
     */
    public function loadTemplate()
    {
        $this->render("layout.html", []);
    }
}
