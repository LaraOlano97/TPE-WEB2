<?php

class EjerciciosView {

    function mostrarEquipos($equipos){

        require_once './templates/header.php'; 
        echo "<p> </p>";
        var_dump($equipos);
        require_once './templates/footer.php';

    }

    function mostrarEquipo($equipo){

        require_once './templates/header.php'; 
        echo "<p> </p>";
        var_dump($equipo);
        require_once './templates/footer.php';
    }

}