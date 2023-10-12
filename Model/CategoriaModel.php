<?php

namespace Model;

use Model\ConexionModel;

class CategoriaModel{

    public static function mostrarCategoria(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM categoria");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

?>