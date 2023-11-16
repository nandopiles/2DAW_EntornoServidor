<?php

namespace Ferran\App\Views;

class SayingView
{
    /**
     * Prints the HTML with the Saying passed by parameter.
     *
     * @param  String $vSaying a single saying.
     * @return void
     */
    function printHTML(String $vSaying)
    {
        echo '<h1>The Random Saying is: ' . $vSaying . '</h1>';
    }
}
