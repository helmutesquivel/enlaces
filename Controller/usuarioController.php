<?php

namespace Controller;
use Model\usuarioModel;

class usuarioController{
    public function login(){
        if(!empty($_POST['usuario'])  && !empty($_POST['password'])){
            // la compraracion para ver su los datos coinciden
            $datos = array (
                'usuario' => $_POST['usuario'],
                'password' => $_POST['password'],

            );
            $respuesta = usuarioModel::login($datos);

            if(isset($respuesta['id'])){//si hubo coincidencia
                $_SESSION['usuario'] = $respuesta['usuario'];
                $_SESSION['nombre'] = $respuesta['nombre'];
                $_SESSION['apellido'] = $respuesta['apellido'];
                $_SESSION['id'] = $respuesta['id'];

                header("location: index.php?action=inicio&id={$respuesta['id']}");
            }else{
                //mensaje de error
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