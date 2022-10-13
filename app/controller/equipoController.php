<?php
require_once './app/view/equipoView.php';
require_once './app/model/equipoModel.php';


class equiposController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new equipos();
        $this->view = new equipoView();
    }

    public function mostrarEquipos() {
        $equipos = $this->model->obtenerEquipos();
        $this->view->mostrarEquipos($equipos);
    }
 

    public function mostrarEquipo($id){
       $Equipo = $this->model->obtenerEquipo($id);
       $this->view->mostrarEquipo($Equipo);
    }

    public function Editar_Equipo($id){
        $Equipo = $this->model->obtenerEquipo($id);
        $this->view->EditarEquipo($Equipo);
    }

    public function ConfirmarEdicion($id){
        $nombre_ej = $_POST['nombre_equipo'];
        $id = (int) $id;
        $descripcion = $_POST['descripcion'];

         $this->model->ModificarEquipo($id, $nombre_eq,  $descripcion);
         $this->view->Confirmar();
    }

    public function Eliminar_Equipo($id){
        $Equipo = $this->model->obtenerEquipo($id);
        $this->view->EliminarEquipodView($Equipo);

    }

    public function ConfirmarEliminar($id){
        $this->model->EliminarEquipo($id);
    }

    public function Obtener_Equipo_Nuevo(){
        $this->view->EjercicioNuevoForm();
    }

    public function ConfirmarAgregar(){
        $nombre_ej = $_POST['nombre_equipo'];
        $descripcion = $_POST['descripcion'];


        $this->model->AgregarEquipo($nombre_eq, $descripcion);
         $this->view->Confirmar();
    }

    

}