<?php

namespace Controller;
use Model\CategoriaModel;

class CategoriaController{

     public function mostrar(){
        $inscripcion = CategoriaModel::mostrarCategoria();
        //AQUI SE HARIAN LOS CÁLCULOS (TOTALES, IVA, %)
        return $inscripcion;//se van a la vista
    }

    
}

?>