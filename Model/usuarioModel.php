<?php

namespace Model;

use Model\ConexionModel;

class usuarioModel{

   
    public static function login($datos){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM usuario where usuario=:usuario and password=:password");
        $stmt->bindParam(":usuario", $datos['usuario'], \PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();// devolviendo la respuesta
    }


}

?>