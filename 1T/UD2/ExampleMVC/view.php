<?php

class View
{
    public function showTask($tasks)
    {
        echo "<ul>";
        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }

    public function showForm()
    {
        echo "<form method='post' action='index.php'>
                <input type='text' name='task' placeholder='Add new task' autocomplete='off'>
                <input type='submit' value='Add'>
            </form>";
    }
}
