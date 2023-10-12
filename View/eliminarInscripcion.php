<?php

    use Controller\InscripcionController;
    $inscripcion = new InscripcionController();

    $registro = $inscripcion->borrar(); //El registro completo de la BD

    $inscripcion->confirmarBorrar();

?>

<form method="post">

<?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>
<br>
<?php echo $registro['curso']; ?>
<p>¿Seguro que quiere desinscribirse?</p>

<input type="hidden" name="idInscripcion" value="<?php echo $registro['idinscripcion'];?>">

<button type="submit" class="btn btn-primary">Borrar</button>
</form>