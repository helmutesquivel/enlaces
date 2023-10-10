<?php
    use Controller\InscripcionController;


    if(!empty($_SESSION['id'])){// Validacion obligatoria inicio de sesion

        $inscripciones = new InscripcionController;

        $listado = $inscripciones->mostrar();

        foreach($listado as $row => $item){
            echo "
                <div class='row'>
                    <div class='col'> {$item['id']} </div>
                    <div class='col'> {$item['nombre']} </div>
                    <div class='col'> {$item['curso']} </div>
                    <div class='col'> <a href='index.php?action=editarInscripcion&idInscripcion={$item['id']}'>Editar</a> </div>
                    <div class='col'> <a href='index.php?action=eliminarInscripcion&idInscripcion={$item['id']}'>Eliminar</a> </div>
                </div>
            ";
        }
    }
?>