<?php
include("Conexion.php");
session_start();
$aux= $_SESSION['Gamertag'];
echo "<a class='item' > $aux </a>"; 
//Define the query
$query = "SELECT idEquipo FROM perfil WHERE Gamertag = '$aux'"; 
							$result = mysqli_query($conexion, $query);
							$row = mysqli_fetch_assoc($result);
							$id = $row['idEquipo'];

$query2 = "DELETE equipo.* from equipo
            JOIN perfil
            ON perfil.idEquipo = equipo.idEquipo
            WHERE perfil.idEquipo = '$id'";

$resultado= $conexion->query($query2);

if (mysqli_query($conexion, $query2)) {
    session_start();
    $_SESSION["Gamertag"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query2 . "<br>" . mysqli_error($conexion);
  }
  
?>