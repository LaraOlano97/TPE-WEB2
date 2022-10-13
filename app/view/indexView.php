<?php
require_once 'libs\smarty\libs\Smarty.class.php';

class indexView{
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function MostrarHome() {
        // asigno variables al tpl smarty
        // $this->smarty->assign('count', count($ejercicios)); 
        // $this->smarty->assign('ejercicios', $ejercicios);

        // mostrar el tpl
        $this->smarty->display('headNav.tpl');
    }
    

 }
// class indexView{
    
//     function index (){
//         require_once './templates/equipo.php';      
//     }

// }