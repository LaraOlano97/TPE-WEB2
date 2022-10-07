<?php
require_once './app/views/EjerciciosView.php';
require_once './app/models/equipoModel.php';


class equiposController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new equipoModel();
        $this->view = new equipoView();
    }

    public function mostrarEquipos() {
        $equipos = $this->model->obtenerEquipos();
        $this->view->mostrarEquipos($ejercicios);
    }

    public function mostrarEquipo($id){
       $ejercicio = $this->model->obtenerEquipo($id);
       $this->view->mostrarEquipo($ejercicio);
    }
    

}