<?php
require_once 'app\model\loginModel.php';
require_once 'app\view\loginView.php';

class loginController {
     private $model;
    private $view;

    // public function __construct() {
    //   $this->view= new loginView();
    //   $this->model= new loginModel();
    //   $this->Titulo= "login"
    // }
    public function __construct() {
      $this->view = new loginView();
      $this->model = new loginModel();  }
    
    public function mostrarLogin($mensaje = '') {
      $this->view->mostrarLogin($mensaje);

  }
    public function verificar() { //se llama desde el router
      $userMail = $_POST['usuario'];
      $userPass = $_POST['contrasenia'];

      if ($this->verificaUsuarioPass($userMail, $userPass))
      {
          header('Location:'.HOME);
      } else 
      {
          $this->mostrarLogin('Error de login');
      }
      
    }
    private function verificaUsuarioPass($userMail, $userPass){
      
      $user = $this->model->buscarUsuario($userMail);
      
      if (!empty($user) && password_verify($userPass, $user->Contrasenia))
      {
        if (!isset($_SESSION)){
          session_start();
        }
        // $_SESSION['id_admin'] = $user->id_admin;
        $_SESSION['Usuario'] = $user->Usuario;
        echo $contrasenia;
        return true;
      } else {
        return false;
      }
    }

      }