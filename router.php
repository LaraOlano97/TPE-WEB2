<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once './app/controllers/indexController.php';
require_once './app/controllers/equipoController.php';

//recibir/leer la accion
if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'equipos';
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $accion);

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
                $equiposController->mostrarEquipo($params[1]);
            }
            break;
    default:
        echo ('404 page not found');
        break;
}
