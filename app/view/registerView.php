<?php
class registerView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function MostrarRegistro() {
        // mostrar el tpl
        $this->smarty->display('register.tpl');
    }
    
}