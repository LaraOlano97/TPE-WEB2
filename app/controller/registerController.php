<?php
require_once './app/view/registerView.php';
require_once './app/model/registerModel.php';

class registerController {
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