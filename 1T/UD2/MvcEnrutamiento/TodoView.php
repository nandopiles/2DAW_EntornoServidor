<?php
class TodoView {
    public function showTodos($todos) {
        echo "<h1>Lista de Tareas</h1>";
        echo "<ul>";
        foreach ($todos as $todo) {
            $status = $todo['completed'] ? 'Completada' : 'Pendiente';
            echo "<li>{$todo['title']} - $status</li>";
        }
        echo "</ul>";
    }

    public function showAddForm() {
        echo "<h2>Agregar Nueva Tarea</h2>";
        echo "<form method='get' action='index.php?route=add'>";
        echo "<input type='text' name='title' placeholder='Título de la tarea' />";
        echo "<input type='submit' value='Agregar' />";
        echo "</form>";
    }
}
?>