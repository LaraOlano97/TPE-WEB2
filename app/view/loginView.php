<?php
class loginView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function MostrarLogin() {
        // mostrar el tpl
        $this->smarty->display('login.tpl');
    }
    
}