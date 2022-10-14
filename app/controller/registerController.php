<?php
require_once './app/view/registerView.php';
require_once './app/model/registerModel.php';

class registerController {
    public function registrarUsuario(){
        if (!isset($_SESSION)){
            if(isset($_POST['usuario'])&&isset($_POST['contrasenia'])){
                $userMail = $_POST['usuario'];
                $userPass = $_POST['contrasenia'];
                if($userMail&&$userPass){
                    $id = $this->userModel->registrarUsuario($userMail, password_hash($userPass, PASSWORD_DEFAULT));
                    if($id){
                        session_start();
                        $_SESSION['id'] = $id;
                        $_SESSION['usuario'] = $userMail;
                        header('Location:'.HOME);
                    }
                    else{
                        $this->formularioRegistro('Usuario ya registrado');
                    }
                }
                else{
                    $this->formularioRegistro('Faltan datos obligatorios');
                }
            }
            else{
                $this->formularioRegistro('Faltan datos obligatorios');
            }
        }
    }
    // private $model;
    private $view;

    public function __construct() {
        // $this->model = new register();
        $this->view = new registerView();
    }

    public function MostrarRegistro() {
      
        $this->view->MostrarRegistro();
    }
}