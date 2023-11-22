<?php
require_once './Modelo/modeloSaludar.php';
require_once './Controlador/controladorSaludar.php';
require_once './Vista/vistaSaludar.php';

require_once './Modelo/modeloDespedir.php';
require_once './Controlador/controladorDespedir.php';
require_once './Vista/vistaDespedida.php';

require_once './Modelo/modeloRefran.php';
require_once './Controlador/controladorRefran.php';
require_once './Vista/vistaRefran.php';

require_once "./Modelo/bddModeloTodos.php";
require_once "./Controlador/bddControllerList.php";
require_once "./Vista/bddView.php";

require_once "./Vista/vistaInicial.php";

// Inicializamos el modelo, controladores y vista
$modelSaludar = new ModeloSaludar();
$viewSaludar = new VistaSaludar();
$controllerSaludar = new ControladorSaludar($modelSaludar, $viewSaludar);

$modelDespedir = new ModeloDespedir();
$viewDespedir = new VistaDespedida();
$controllerDespedirr = new ControladorDespedir($modelDespedir, $viewDespedir);

$modelRefran = new ModeloRefran();
$viewRefran = new VistaRefran();
$controllerRefran = new ControladorRefran($modelRefran, $viewRefran);

$modeloLista = new BddModeloTodos();
$vista = new BddView();
$controllerLista = new BddControllerList($modeloLista, $vista);

$vistaInicial=new VistaInicial();
// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
// todo es por la imagen del contenedor
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

//Según lo que lee de la ruta te envia a una parte del switch 
switch ($route) {
    case 'saludar':
        $controllerSaludar->obtenerSaludo();

        break;
    case 'despedir':
        $controllerDespedirr->obtenerDespedida();
        

        break;

    case 'refran':
        $controllerRefran->obtenerrefran();
       
        break;

    case 'list':

        $controllerLista->mostrarLista();
    
        break;  
            
    default:
    $vistaInicial->muestraIniio();
}
