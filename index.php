<?php

session_start(); // unica Ejecucion porque index carga a los demas archivos

date_default_timezone_set('America/Guatemala');

require_once('autoload.php');
use Controller\PaginaController;

$pagina = new PaginaController;

$pagina->mostrarInicio();

$_SESSION

?>