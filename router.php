<?php

require_once './app\controller\equipoController.php';

require_once './app/controller/indexController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//recibir/leer la accion
$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $action);


$indexController = new indexController();
$equipoController = new equiposController();

//
switch ($params[0]) {
    case 'inicio':

        $indexController->Mostrar();
        break;
    case 'equipos':
        if(empty($params[1]) || $params[1]<0){
            $equipoController->mostrarEquipos();
            }
            else{
                $equipoController->mostrarEquipo($params[1]);
            }
            break;
    default:
        echo ('404 page not found');
        break;
    case 'login':
         
}
