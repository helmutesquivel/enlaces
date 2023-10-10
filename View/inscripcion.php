<?php

    use Controller\InscripcionController;
    use Controller\CategoriaController;// categoria 
    use Controller\cursoController;

    $curso = new cursoController();
    $categoria = new CategoriaController();// categoria controller
    $inscripcion = new InscripcionController();
    if(!empty($_SESSION['id'])){// Validacion obligatoria inicio de sesion
?>

<h1>Página de inscripción</h1>

<div class="container">

    <form method="POST">

    <div class="alert alert-light" role="alert">
        <h1> <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></h1>
    </div>
        
<!--
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Nombre</label></div>
                <div class="col-10"><input class="form-control" type="text" name="nombre" required></div>
            </div>
        </div>
    -->

        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Curso</label></div>
                <div class="col-10">
                <select name="idcurso">
                        <!--Como ralizar una seleccion de categoria como el select -->
                        <?php 
                            foreach($curso->mostrar() as $row => $item){                              
                                echo "<option value='{$item['id']}'>{$item['curso']}</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>

     <!--   
        <div class="form-group mt-4">
            <div class="row">
                <div class="col-2"><label>Categoria del Curso</label></div>
                <div class="col-10">
                   
                </div>
     
            </div>
        </div>
      -->

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>



        <?php
           $resultado = $inscripcion->inscribir();

        
            if($resultado == "guardado"){
                echo "<div class='alert alert-success mt-5' role='alert'>
                        Alumno inscrito
                     </div>";
            }elseif($resultado == "error"){
                echo "<div class='alert alert-danger mt-5' role='alert'>
                        Error
                     </div>";
            }
         }// CIERRE DE VALIDACION, INICIO DE SESION    
        ?>

</div>