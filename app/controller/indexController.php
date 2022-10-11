<?php
require_once './app/view/indexView.php';


class indexController {
    private $model;
    private $view;

    public function __construct() {
        $this->view = new indexView();
    }

    function Mostrar(){
        $this->view->index();
    }
}