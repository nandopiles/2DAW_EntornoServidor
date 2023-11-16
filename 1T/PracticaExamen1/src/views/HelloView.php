<?php

namespace Ferran\App\Views;

class HelloView
{
    /**
     * Prints the HTML with the Time passed by parameter.
     *
     * @param  String $vTime h:s
     * @return void
     */
    function printHTML(String $vTime)
    {
        echo '<h1>Hello Hello. It\'s ' . $vTime . '</h1>';
    }
}
