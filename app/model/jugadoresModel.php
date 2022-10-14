<?php
require_once('model.php');
class jugadores {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=equipos;charset=utf8', 'root', '');
    }
public function obtenerJugadores($id){
        $sentencia = $this->db->prepare("SELECT * FROM `jugadores` WHERE id_equipo=?");
        $sentencia->execute([$id]);

        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $jugadores;
    }
}