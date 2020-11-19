<?php
  include("Conexion.php");

    $TeamName = $_POST['TeamName'];
    $j1 = $_POST['jugador1'];
    $j2 = $_POST['jugador2'];
    //$j3 = $_POST['jugador3'];
    //$j4 = $_POST['jugador4'];

  $query = "INSERT INTO equipo(NombreEquip,JugadorUno,JugadorDos) VALUES('$TeamName','$j1','$j2')";

  $resultado= $conexion->query($query);
  if (mysqli_query($conexion, $query)) {
    session_start();
    $_SESSION["usuario"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }
  ?>