<?php
class TodoController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function addTodo($title) {
        $this->model->addTodo($title);
    }
}
?>