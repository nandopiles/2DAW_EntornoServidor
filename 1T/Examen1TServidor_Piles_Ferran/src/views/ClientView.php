<?php

namespace Ferran\App\Views;

class ClientView
{
    /**
     * Prints the information with a table format
     *
     * @param  Array $data
     * @return void
     */
    public function printHTML(array $data)
    {
        echo '<table border="1">
            <tr>
                <th>Name</th>
                <th>City</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td><a href="?action=clientsdetail&id=' . $row['cliente_cod'] . '">' . $row['nombre'] . '</a></td>
                    <td>' . $row['ciudad'] . '</td>
                </tr>';
        }

        echo '</table>';
        echo '<br> <a href="?action=main">Main Window</a>';
    }

    public function printClientDetails(array $data)
    {
        echo '<table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>Area</th>
                <th>Phone</th>
                <th>Repr Code</th>
                <th>Credit Limit</th>
                <th>Remarks</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td>' . $row['cliente_cod'] . '</td>
                    <td>' . $row['nombre'] . '</td>
                    <td>' . $row['direc'] . '</td>
                    <td>' . $row['cod_postal'] . '</td>
                    <td>' . $row['area'] . '</td>
                    <td>' . $row['telefono'] . '</td>
                    <td>' . $row['repr_cod'] . '</td>
                    <td>' . $row['limite_credito'] . '</td>   
                    <td>' . $row['observaciones'] . '</td>
                </tr>';
        }

        echo '</table>';
        echo '<a href="?action=clients">Client\'s List</a><br>';
    }
}
