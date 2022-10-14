<?php
require_once('model.php');
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
        $sentencia = $this->db->prepare("SELECT * FROM `equipos` WHERE id_equipo=?");
        $sentencia->execute([$id]);

        $equipo = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $equipo;
    }

    public function ModificarEquipo($id, $nombre_eq,  $descripcion){
        
        
        $sentencia = $this->db->prepare("UPDATE `equipos` SET `nombre_eq`='$nombre_eq'");
        $sentencia->execute([$id]);

   }

   public function EliminarEquipo($id){
       $sentencia = $this->db->prepare('DELETE FROM `equipos` WHERE id_eq=?');
       $sentencia->execute([$id]);

   }

   public function AgregarEquipo($nombre_ej, $musculo_id, $intensidad, $seccion, $descripcion){
       $sentencia = $this->db->prepare('INSERT INTO equipos(id_eq, nombre_eq, ) VALUES(?,?,?,?,?,?)');
       $sentencia->execute([$this->db->lastInsertId(), $nombre_eq]);
       
   }




}