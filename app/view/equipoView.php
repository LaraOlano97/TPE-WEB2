<?php
require_once 'libs\smarty\libs\Smarty.class.php';

class equipoView{
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function mostrarEquipos($equipos) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($equipos)); 
        $this->smarty->assign('equipos', $equipos);

        // mostrar el tpl
        $this->smarty->display('equipos.tpl');
    }
    function mostrarJugadores($jugadores){
     $this->smarty->assign('jugadores', $jugadores);
     $this->smarty->display('equipo.tpl');
    }
   function mostrarEquipo($Equipo){
    $this->smarty->assign('equipo', $Equipo);
    $this->smarty->display('equipo.tpl');
   }
    
    
 }
