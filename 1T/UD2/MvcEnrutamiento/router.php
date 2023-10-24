<?php
require_once './TodoModel.php';
require_once './TodoController.php';
require_once './TodoView.php';

// Inicializamos el modelo, controladores y vista
$model = new TodoModel();
$view = new TodoView();
$controller = new TodoController($model, $view);

echo '0 ';
echo $_GET['route'];
echo ' ';
// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
// todo es por la imagen del contenedor
$route = isset($_GET['route']) ? $_GET['route'] : 'add';
echo '1 ';
echo $route;
echo '2';
switch ($route) {
    case 'list':
        $todos = $model->getTodos();
        $view->showTodos($todos);
        break;
    case 'add':
        $view->showAddForm();
        break;
    default:
        echo "Ruta no válida.";
}
