<?php 

function getEquipos(){

    $db = new PDO('mysql:host=localhost;'.'dbname=deudas;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from equipos");
    $sentencia->execute();
    $noticias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $equipos;
    
}

function getJugadores(){
    
    $db = new PDO('mysql:host=localhost;'.'dbname=deudas;charset=utf8', 'root', '');
    $sentencia = $db->prepare("select * from jugadores");
    $sentencia->execute();
    $noticias = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $jugadores;
}
?>