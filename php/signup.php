<?php
  include("Conexion.php");
  session_start();

    $usu = $_POST['Username'];
    $pass = $_POST['Password'];
    




  $query = "INSERT INTO `perfil` (`nombre`, `idioma`, `foto`, `idCuenta`, `idClasificacion`) VALUES  ('$nombre', '$idioma', 'nepe.jpg', '$usu','$varcheck')";

  //$resultado= $conexion->query($query);S
  if (mysqli_query($conexion, $query)) {

    header("location: inicio.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }
  ?>