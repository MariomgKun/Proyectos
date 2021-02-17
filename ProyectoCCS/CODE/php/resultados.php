<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('preguntas.php');
$objeto =  new DistorsionesCognitivas();
$resultados  = $objeto->resultados();
echo $resultados;
?>