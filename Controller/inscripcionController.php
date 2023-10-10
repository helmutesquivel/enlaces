<?php

namespace Controller;
use Model\InscripcionModel;

class InscripcionController{

    public function inscribir(){
        if( !empty($_POST['idcurso']) ){
            $datos = array(
                "idcurso" => $_POST['idcurso'],
                "fecha" => date("Y/m/d")
                
            );
            $respuesta = InscripcionModel::guardarInscripcion($datos);

            return $respuesta ? "guardado" : "error";
        }
    }

    public function mostrar(){
        $inscripcion = InscripcionModel::mostrarInscripcion();
        //AQUI SE HARIAN LOS CÁLCULOS (TOTALES, IVA, %)
        return $inscripcion;//se van a la vista
    }

    public function editar(){
        $idInscripcion = $_GET['idInscripcion'];
        $inscripcion = InscripcionModel::editarInscripcion($idInscripcion);
        return $inscripcion;
    }

    public function actualizar(){
        if( !empty($_POST['nombre']) && !empty($_POST['curso']) ){
            $datos = array(
                "id" => $_POST['idInscripcion'],
                "nombre" => $_POST['nombre'],
                "curso" => $_POST['curso']
            );
            //Enviando los datos al modelo, para que se actualice el registro.
            $respuesta = InscripcionModel::actualizarInscripcion($datos);

            if($respuesta){ header("Location: index.php?action=verinscripcion"); }
        }
    }

    public function borrar(){
        if( !empty($_GET['idInscripcion'])){
            $inscripcion = InscripcionModel::borrarInscripcion($_GET['idInscripcion']);
            return $inscripcion;
        }
    }

    public function confirmarBorrar(){
        if( !empty($_POST['idInscripcion'])){
            $inscripcion = InscripcionModel::borrarConfirmadoInscripcion($_POST['idInscripcion']);
            if($inscripcion){ header("Location: index.php?action=verinscripcion"); }
        }
        
    }

}

?>