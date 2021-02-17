<?php
  include("Conexion.php");

    $TeamName = $_POST['TeamName'];
    $j1 = $_POST['jugador1'];
    $j2 = $_POST['jugador2'];
    $j3 = $_POST['jugador3'];
    $j4 = $_POST['jugador4'];

   $query = "INSERT INTO equipo(NombreEquip,JugadorUno,JugadorDos,JugadorTres,JugadorCuatro) VALUES('$TeamName','$j1','$j2', '$j3','$j4')";
   $queryid = "SELECT idEquipo FROM equipo WHERE NombreEquip = '$TeamName'";
   $result = mysqli_query($conexion, $queryid);
    $row = mysqli_fetch_assoc($result);
    $id = $row['idEquipo'];

    if($j1 != NULL){
        
        $queryJug = " UPDATE perfil 
        SET idEquipo = '$id' 
        WHERE Gamertag = '$j1'";
        $resultado2 = $conexion->query($queryJug);
    }elseif($j2 != NULL)  {
        $queryJug2 = " UPDATE perfil 
        SET idEquipo = '$id' 
        WHERE Gamertag = '$j2'";
        $resultado3 = $conexion->query($queryJug2);
    }elseif($j3 != NULL)  {
        $queryJug3 = " UPDATE perfil 
        SET idEquipo = '$id' 
        WHERE Gamertag = '$j3'";
        $resultado3 = $conexion->query($queryJug3);
    }elseif($j4 != NULL)  {
        $queryJug4 = " UPDATE perfil 
        SET idEquipo = '$id' 
        WHERE Gamertag = '$j4'";
        $resultado3 = $conexion->query($queryJug4);
    }else{
        echo "No pasa na";
    }



  if (mysqli_query($conexion, $query) && mysqli_query($conexion, $queryJug)) {
    session_start();
    $_SESSION["Gamertag"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }
  

  ?>