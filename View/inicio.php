<h1>Bienvenidos al sitio</h1>


<?php
    if(!empty($_SESSION['usuario'])){
        echo "
        <h2>
        Mucho gusto:
        <strong>{$_SESSION['nombre']} {$_SESSION['apellido']} </strong>      
        </h2>
        ";
    }

?>


