<?php
  include("Conexion.php");

    $TeamName = $_POST['TeamName'];
    $j1 = $_POST['jugador1'];
    $j2 = $_POST['jugador2'];
    //$j3 = $_POST['jugador3'];
    //$j4 = $_POST['jugador4'];

  $query = "INSERT INTO equipo(NombreEquip,JugadorUno,JugadorDos) VALUES('$TeamName','$j1','$j2')";
<<<<<<< HEAD
  //WHERE Gamertag = '$j1'";
  
=======

>>>>>>> b63f793f845394bafb2b62936a2ff26aa2a78471
  $resultado= $conexion->query($query);
  if (mysqli_query($conexion, $query)) {
    session_start();
    $_SESSION["usuario"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }
<<<<<<< HEAD
  
  $resultado= $conexion->query2($query2);
  if (mysqli_query($conexion, $query2)) {
    session_start();
    $_SESSION["usuario"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query2 . "<br>" . mysqli_error($conexion);
  }
=======
>>>>>>> b63f793f845394bafb2b62936a2ff26aa2a78471
  ?>