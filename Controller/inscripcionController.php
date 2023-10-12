<?php

namespace Controller;
use Model\inscripcionModel;

class inscripcionController{

    public function inscribir(){
        if( !empty($_POST['idcurso'])){
            $datos = array(
                "idcurso" => $_POST['idcurso'],
                "fecha" => date("Y/m/d")
            );
            $respuesta = inscripcionModel::guardarInscripcion($datos);

            return $respuesta ? "guardado" : "error";
        }
    }

    public function mostrar(){
        $inscripcion = inscripcionModel::mostrarInscripcion();
        return $inscripcion;//se van a la vista
    }

    public function editar(){
        $idInscripcion = $_GET['idInscripcion'];
        $inscripcion = inscripcionModel::editarInscripcion($idInscripcion);
        return $inscripcion;
    }

    public function actualizar(){
        if( !empty($_POST['idInscripcion']) && !empty($_POST['idcurso']) ){
            $datos = array(
                "idinscripcion" => $_POST['idInscripcion'],
                "idcurso" => $_POST['idcurso'],
                "idusuario" => $_SESSION['id']
            );
            //Enviando los datos al modelo, para que se actualice el registro.
            $respuesta = inscripcionModel::actualizarInscripcion($datos);

            if($respuesta){ header("Location: index.php?action=verinscripcion"); }
        }
    }

    public function borrar(){
        if( !empty($_GET['idInscripcion'])){
            $inscripcion = inscripcionModel::borrarInscripcion($_GET['idInscripcion']);
            return $inscripcion;
        }
    }

    public function confirmarBorrar(){
        if( !empty($_POST['idInscripcion'])){
            $inscripcion = inscripcionModel::borrarConfirmadoInscripcion($_POST['idInscripcion']);
            if($inscripcion){ header("Location: index.php?action=verinscripcion"); }
        }
        
    }
    public function mostrarPorUsuario(){
        $inscripcion = InscripcionModel::mostrarInscripcionEstudiante();
        return $inscripcion;//se van a la vista
    }
}
?>