<?php
require_once './app/view/loginView.php';
require_once './app/model/loginModel.php';

class loginController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new login();
        $this->view = new loginView();
    }