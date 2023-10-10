<?php

namespace Controller;
use Model\cursoModel;

class cursoController{

       public function mostrar(){
        $curso = cursoModel::mostrarCurso();
        //AQUI SE HARIAN LOS CÁLCULOS (TOTALES, IVA, %)
        return $curso;//se van a la vista
    }
}

?>