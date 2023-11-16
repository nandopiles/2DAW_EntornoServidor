<?php

namespace Ferran\App\Views;

class TaskView
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
                <th>Id</th>
                <th>Tittle</th>
                <th>Description</th>
                <th>Creation Date</th>
                <th>Expiration Date</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['titulo'] . '</td>
                    <td>' . $row['descripcion'] . '</td>
                    <td>' . $row['fecha_creacion'] . '</td>
                    <td>' . $row['fecha_vencimiento'] . '</td>
                </tr>';
        }

        echo '</table>';
    }
}
