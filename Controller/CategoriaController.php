<?php

namespace Controller;
use Model\CategoriaModel;

class CategoriaController{

    public function mostrar(){
        $inscripcion = CategoriaModel::mostrarCategoria();
        return $inscripcion;//se van a la vista
    }
}

?>