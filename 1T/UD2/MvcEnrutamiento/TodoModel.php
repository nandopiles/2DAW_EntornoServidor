<?php
class TodoModel {
    private $todos = [];

    public function __construct() {
        // Simulamos datos iniciales
        $this->todos[] = ['id' => 1, 'title' => 'Hacer compras', 'completed' => false];
        $this->todos[] = ['id' => 2, 'title' => 'Lavar el coche', 'completed' => true];
    }

    public function getTodos() {
        return $this->todos;
    }

    public function addTodo($title) {
        $id = count($this->todos) + 1;
        $this->todos[] = ['id' => $id, 'title' => $title, 'completed' => false];
    }
}
?>