<?php

namespace Ferran\App\Views;

class EmployeeView
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
                <th>Surname</th>
                <th>Office</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td><a href="?action=employeesdetail&id=' . $row['emp_no'] . '">' . $row['apellidos'] . '</a></td>
                    <td>' . $row['oficio'] . '</td>
                </tr>';
        }

        echo '</table>';
        echo '<br> <a href="?action=main">Main Window</a>';
    }

    /**
     * printClientDetails
     *
     * @param  mixed $data
     * @return void
     */
    public function printEmployeeDetails(array $data)
    {
        echo '<table border="1">
            <tr>
                <th>Id</th>
                <th>Surname</th>
                <th>Office</th>
                <th>Boss</th>
                <th>High Date</th>
                <th>Salary</th>
                <th>Commission</th>
                <th>Dept Num</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td>' . $row['emp_no'] . '</td>
                    <td>' . $row['apellidos'] . '</td>
                    <td>' . $row['oficio'] . '</td>
                    <td>' . $row['jefe'] . '</td>
                    <td>' . $row['fecha_alta'] . '</td>
                    <td>' . $row['salario'] . '</td>
                    <td>' . $row['comision'] . '</td>
                    <td>' . $row['dept_no'] . '</td>   
                </tr>';
        }

        echo '</table>';
        echo '<a href="?action=employees">Employees\' List</a>';
    }
}
