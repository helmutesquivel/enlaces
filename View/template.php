<?php
require_once('autoload.php');
use Controller\PaginaController;
    $capturaEnlace = new PaginaController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página que maneja enlaces</title>
    <link rel="stylesheet" href="View/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f31d6f48e7.js" crossorigin="anonymous"></script>
    <style>
         
    </style>
</head>
<body>

    <?php require_once("navbar.php"); ?>

    <div class="container">
        <?php
            $capturaEnlace->enlacesPagina();
        ?>
    </div>

</body>
</html>

