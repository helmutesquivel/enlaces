<?php

    use Controller\InscripcionController;
    $inscripcion = new InscripcionController();

    $registro = $inscripcion->borrar(); //El registro completo de la BD

    $inscripcion->confirmarBorrar();

?>

<form method="post">

<?php echo $registro['nombre']; ?>
<br>
<?php echo $registro['curso']; ?>
<p>¿Seguro que quiere borrar?</p>

<input type="hidden" name="idInscripcion" value="<?php echo $registro['id'];?>">

<button type="submit" class="btn btn-primary">Borrar</button>
</form>