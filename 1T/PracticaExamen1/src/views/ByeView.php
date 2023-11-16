<?php

namespace Ferran\App\Views;

class ByeView
{    
    /**
     * Prints the HTML with the Time passed by parameter.
     *
     * @param  String $vTime h:s
     * @return void
     */
    function printHTML(String $vTime)
    {
        echo '<h1>Bye Bye. It\'s ' . $vTime . '</h1>';
    }
}
