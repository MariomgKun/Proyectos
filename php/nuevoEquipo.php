<?php
  include("Conexion.php");

    $TeamName = $_POST['TeamName'];
    $j1 = $_POST['jugador1'];
    $j2 = $_POST['jugador2'];
    //$j3 = $_POST['jugador3'];
    //$j4 = $_POST['jugador4'];

   $query = "INSERT INTO equipo(NombreEquip,JugadorUno,JugadorDos) VALUES('$TeamName','$j1','$j2')";
   $queryid = "SELECT idEquipo FROM equipo WHERE NombreEquip = '$TeamName'";
   $result = mysqli_query($conexion, $queryid);
    $row = mysqli_fetch_assoc($result);
    $id = $row['idEquipo'];


  echo "<script type='text/javascript'>alert('$id');</script>";

  $queryJug = " UPDATE perfil 
   SET idEquipo = '$id' 
   WHERE Gamertag = '$j1'";

  $resultado = $conexion->query($query);

  $resultado2 = $conexion->query($queryJug);


  //if (mysqli_query($conexion, $query)) {
   // session_start();
   // $_SESSION["usuario"] =$gamertag ;
  //  header("location: principal.php");
 // } else {
  //  echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  //}
  

  ?>