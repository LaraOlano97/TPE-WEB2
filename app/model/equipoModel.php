<?php
class equipos {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=equipos;charset=utf8', 'root', '');
    }

    public function obtenerEquipos(){
        $sentencia = $this->db->prepare("SELECT * FROM equipos");
        $sentencia->execute();

        $equipos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $equipos;
    }
    public function obtenerEquipo($id){
        $sentencia = $this->db->prepare("SELECT * FROM `equipos` WHERE id=$id");
        $sentencia->execute();

        $equipo = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $equipo;
    }



}