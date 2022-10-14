<?php
require_once 'libs\smarty\libs\Smarty.class.php';
class loginView{
    // $this->smarty->assign('basehref', BASE_URL);
    private $smarty;

    // public function __construct() {
    //     $this->smarty = new Smarty(); // inicializo Smarty
    // }
    private function getActiveEmail(){
        if (!isset($_SESSION)){
			session_start();
		}
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $rol = $_SESSION['admin'];
        }
            
        else{
            $email = 'invitado';
            $rol = '0';
        }
        
        return array ($email, $rol);
        
        
    }
    
    public function mostrarLogin($mensaje = '') {
        $this->smarty->assign('titulo','Inicie sesion');
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('user', $this->getActiveEmail());
        $this->smarty->display('templates/login.tpl');

    }

function Actualizar(){
    $smarty = new  Smarty();
    $smarty->display('templates/header.tpl');
    // $smarty->assign('Jugadores', $jugadores);
    $smarty->assign('equipos', $equipos);
    $smarty->display('templates/adminEdit.tpl');
}
}