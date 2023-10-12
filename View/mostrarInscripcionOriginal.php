<?php
    use Controller\InscripcionController;

    if(!empty($_SESSION['id']) && ($_SESSION['rol']) ){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

        $inscripciones = new InscripcionController;
        $listado = $inscripciones->mostrar();

        foreach($listado as $row => $item){
            echo "
                <div class='row'>
                    <div class='col'> {$item['idinscripcion']} </div>
                    <div class='col'> {$item['nombre']} </div>
                    <div class='col'> {$item['curso']} </div>
                    <div class='col'> <a href='index.php?action=editarInscripcion&idInscripcion={$item['idinscripcion']}'>Editar</a> </div>
                    <div class='col'> <a href='index.php?action=eliminarInscripcion&idInscripcion={$item['idinscripcion']}'>Eliminar</a> </div>
                </div>
            ";
        }
    }



?>