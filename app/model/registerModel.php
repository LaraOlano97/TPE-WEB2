<?php
require_once('model.php');
class register{
    public function getUsuario($email) {
        
        $sql = "SELECT * FROM usuario WHERE email = ?";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([$email]);

        $usuario = $stm->fetchAll(PDO::FETCH_OBJ);

        if (count($usuario) > 0) {
            return $usuario[0];    
        }
        
        return null;
    }

    public function registrarUsuario($email, $pass){

        $verificar = $this->getUsuario($email);
        if(!$verificar){
            $sql = "INSERT INTO administradores (`Usuario`, `Contraseña`)
                VALUES (?, ?, ?)";

            $stm = $this->pdo->prepare($sql);

            $stm->execute([$email, $pass]);

            return $this->pdo->lastInsertId();
        }
        else{
            return null;
        }
        
}}