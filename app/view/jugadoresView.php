
<?php
require_once 'libs\smarty\libs\Smarty.class.php';

class jugadoresView{
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

function mostrarJugadores($jugadores){
     $this->smarty->assign('jugadores', $jugadores);
     $this->smarty->display('jugadores.tpl');
    }}