<?php
    use Controller\inscripcionController;
    
    if(!empty($_SESSION['id'])) {
        $inscripciones = new inscripcionController;
        
        if ($_SESSION['rol'] == 'a') {
            // Si el usuario tiene el rol 'a' (administrador), puede ver todas las inscripciones
            $listado = $inscripciones->mostrar();
        } else {
            // Si el usuario no es administrador, solo mostrar sus inscripciones
            $listado = $inscripciones->mostrarPorUsuario($_SESSION['id']);
        }

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