<?php 

function getEquipos(){

    $db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from equipos");
    $sentencia->execute();
    $equipos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $equipos;
    
}

function getJugadores(){
    
    $db = new PDO('mysql:host=localhost;'.'dbname=deudas;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from jugadores");
    $sentencia->execute();
    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $jugadores;
}
?>