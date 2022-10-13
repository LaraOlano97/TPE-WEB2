<?php
require_once './app/view/jugadoresView.php';
require_once './app/model/jugadoresModel.php';


class jugadoresController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new jugadores();
        $this->view = new jugadoresView();
    }

public function mostrarJugadores($id) {
        $jugadores = $this->model->obtenerJugadores($id);
        $this->view->mostrarJugadores($jugadores);
    }}