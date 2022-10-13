<?php
require_once 'libs\smarty\libs\Smarty.class.php';

class indexView{
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function MostrarHome() {


        // mostrar el tpl
        $this->smarty->display('index.tpl');
    }
    

 }
// class indexView{
    
//     function index (){
//         require_once './templates/equipo.php';      
//     }

// }