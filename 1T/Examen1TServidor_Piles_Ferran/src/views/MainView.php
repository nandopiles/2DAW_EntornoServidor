<?php

namespace Ferran\App\Views;

class MainView
{
    /**
     * Prints the menu to access to the info.
     *
     * @return void
     */
    public function printHTML()
    {
        echo '<a href="?action=clients">Clients</a><br>';
        echo '<a href="?action=employees">Employees</a>';
    }
}
