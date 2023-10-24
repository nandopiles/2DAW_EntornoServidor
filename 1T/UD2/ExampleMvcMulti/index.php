<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'hello';
}

if ($page == 'hello') {
    require_once('./controllers/HelloController.php');
    $controller = new HelloController();
    $controller->sayHello();
} elseif ($page == 'goodbye') {
    require_once('./controllers/GoodbyeController.php');
    $controller = new GoodbyeController();
    $controller->sayGoodbye();
} else {
    echo "Página no encontrada";
}
?>
