<?php

namespace Model;

use Model\ConexionModel;

class cursoModel{

    public static function mostrarCurso(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM curso");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>