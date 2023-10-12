<?php

namespace Controller;
use Model\UsuarioModel;

class UsuarioController{

    public function login(){
        if(!empty($_POST['usuario']) && !empty($_POST['password'])){
            //La comparación para ver si los datos coinciden
            $datos = array(
                'usuario' => $_POST['usuario'],
                'password' => $_POST['password']
            );
            $respuesta = UsuarioModel::login($datos);

            if(isset($respuesta['id'])){//Hubo coincidencia
                $_SESSION['usuario'] = $respuesta['usuario'];
                $_SESSION['nombre'] = $respuesta['nombre'];
                $_SESSION['apellido'] = $respuesta['apellido'];
                $_SESSION['id'] = $respuesta['id'];
                $_SESSION['rol'] = $respuesta['rol'];

                header("location: index.php?action=inicio&id={$respuesta['id']}");
            }else{
                //mensaje error
                return "error";
            }
        }
    }

    public function logout(){
        session_destroy();
        header("location: index.php?action=inicio");
    }

}

?>