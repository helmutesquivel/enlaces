<?php
    use Controller\InscripcionController;
    $inscripcion = new InscripcionController();

    $registro = $inscripcion->editar();//array con los campos de BD

    $inscripcion->actualizar();//Enviar los nuevos datos a la BD
?>

<form method="POST">


<div class="form-group">
    <div class="row mb-3">
        <div class="col-2"><label>Nombre</label></div>
        <div class="col-10"><input class="form-control" type="text" name="nombre" value="<?php echo $registro['nombre']; ?>" required></div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-2"><label>Curso</label></div>
        <div class="col-10"><input type="text" class="form-control" name="curso" value="<?php echo $registro['curso']; ?>"></input></div>
    </div>
</div>


<input type="hidden" name="idInscripcion" value="<?php echo $registro['id'];?>">

<div class="form-group">
    <div class="row mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>
</form>