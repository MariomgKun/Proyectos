<?php
session_start(); // este por si no la has iniciado en la pagina que planeas destruirla, de lo contrario no te destruirá nada
session_destroy();
session_unset();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('preguntas.php');
$objeto =  new DistorsionesCognitivas();
$objeto->iniciar_variables();
$pregunta = $objeto->pregunta();
echo $pregunta;
?>