<?php

    use Controller\UsuarioController;
    $usuario = new UsuarioController();

?>

<h1>Login</h1>

<div class="container">

    <form method="POST">


        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Usuario</label></div>
                <div class="col-10"><input class="form-control" type="text" name="usuario" required></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Contraseña</label></div>
                <div class="col-10"><input type="password" class="form-control" name="password"></input></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </div>
    </form>



        <?php
        $resultado = $usuario->login();
            if($resultado == "error"){
                echo "<div class='alert alert-danger mt-5' role='alert'>
                        Error en los datos
                     </div>";
            }
        ?>

</div>