<?php

require_once './app\controller\equipoController.php';
require_once './app/controller/registerController.php';
require_once './app/controller/indexController.php';
require_once './app/controller/loginController.php';

require_once './app/controller/jugadoresController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('inicio', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/inicio');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');


//recibir/leer la accion
$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $action);


$indexController = new indexController();
$equipoController = new equiposController();
$loginController= new loginController();
$registerController= new registerController();
$jugadoresController=new jugadoresController();
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
                $jugadoresController->mostrarJugadores($params[1]);
            }
            break;
            case 'login':
                if (isset($params[1])) {
                if($params[1] == 'validar'){
                    $loginController->verificar();
                }}
                else{
                    $loginController->mostrarLogin();
                    
                }
                
            break;
          
                    case 'register':
                        $registerController->MostrarRegistro();
                        break;
                        default:
                        echo ('404 page not found');
                        break;
         
}
