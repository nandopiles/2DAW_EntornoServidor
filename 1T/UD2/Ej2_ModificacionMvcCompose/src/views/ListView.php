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
    public function printHTML($data)
    {
        echo '<table border="1">
            <tr>
                <th>Tittle</th>
                <th>Expiration Date</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td>' . $row['titulo'] . '</td>
                    <td>' . $row['fecha_vencimiento'] . '</td>
                </tr>';
        }

        echo '</table>';
    }
}
