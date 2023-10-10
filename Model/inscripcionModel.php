<?php

namespace Model;

use Model\ConexionModel;

class InscripcionModel{

    public static function guardarInscripcion($datos){
        try{
       // $stmt = ConexionModel::conectar()->prepare("INSERT INTO inscripcion (nombre,curso,fkcategoria) VALUES (:nom, :cur, :fkcategoria)");
       // $stmt->bindParam(":nom", $datos['nombre'], \PDO::PARAM_STR);//INT, STR, STR
        //$stmt->bindParam(":cur", $datos['curso'], \PDO::PARAM_STR);
        //$stmt->bindParam(":fkcategoria", $datos['fkcategoria'], \PDO::PARAM_INT);

        $stmt = ConexionModel::conectar()->prepare("INSERT INTO inscripcion (fkcurso,fkusuario,fecha) VALUES (:curso, :usuario, :fecha)");
        $stmt->bindParam(":curso", $datos['idcurso'], \PDO::PARAM_STR);//INT, STR, STR
        $stmt->bindParam(":usuario", $_SESSION['id'], \PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos['fecha'], \PDO::PARAM_STR);
        
        //Delete o update
        //No ejecución de Código SQL
        return $stmt->execute() ? true : false;
        }catch( \Throwable $th ){
            return false;
        }
    }

    public static function mostrarInscripcion(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM inscripcion INNER JOIN curso on  curso.id= fkcurso INNER JOIN usuario on usuario.id= fkusuario");// usar un where
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function editarInscripcion($idInscripcion){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM inscripcion where id = :id");
        $stmt->bindParam(':id',$idInscripcion,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }

    public static function actualizarInscripcion($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE inscripcion SET nombre = :nom, curso = :cur where id = :id");
        $stmt->bindParam(':nom',$datos['nombre'],\PDO::PARAM_STR);
        $stmt->bindParam(':cur',$datos['curso'],\PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['id'],\PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }

    public static function borrarInscripcion($idInscripcion){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM inscripcion where id = :id");
        $stmt->bindParam(':id',$idInscripcion,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }

    public static function borrarConfirmadoInscripcion($id){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM inscripcion where id = :id");
        $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }

}

?>