<?php

namespace Ferran\App\Views;

class DetailView
{
    public function printHTML($data)
    {
        echo '<table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
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
