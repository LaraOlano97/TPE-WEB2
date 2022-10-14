<?php
require_once('model.php');
require_once('app\view\loginView.php');
class loginModel{
        private $db;
        private $view;
        private $model;
        private $Titulo;
    
        public function __construct() {
    
            $this->db = new PDO('mysql:host=localhost;'.'dbname=equipos;charset=utf8', 'root', '');
        }
    public function obtenerAdministradores(){
            $sentencia = $this->db->prepare("SELECT * FROM administradores");
            $sentencia->execute();
    
            $administradores = $sentencia->fetchAll(PDO::FETCH_OBJ);
            
            return $administradores;
        }
        public function obtenerEquipos(){
            $sentencia = $this->db->prepare("SELECT * FROM equipos");
            $sentencia->execute();
    
            $equipos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            
            return $equipos;

        }
        public function buscarUsuario($username) {
            $query = $this->db->prepare('SELECT * FROM administradores WHERE Usuario = ?');
            $query->execute(array($username));
            $stm = $this->pdo->prepare($query);
            $stm->execute([$email]);

            $usuario = $stm->fetchAll(PDO::FETCH_OBJ);
    
            if (count($usuario) > 0) {
                return $usuario[0];    
            }
            
            return null;   }
    
    }