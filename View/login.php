<?php

    use Controller\usuarioController;
    $usuario = new usuarioController();

?>

<h1>Página de inscripción</h1>

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
                <div class="col-2"><label>Constraseña</label></div>
                <div class="col-10"><input type="password" class="form-control" name="password"></input></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Iniciar</button>
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