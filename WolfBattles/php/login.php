<?php

include("Conexion.php");
session_start();
$email=$_POST["Username"];
$contra=$_POST["Password"];
$boton=$_POST["boton"];
if($boton=="a"){

    $query = "SELECT * FROM perfil WHERE email= '$email' AND contraseña = '$contra'";
    $query2= "SELECT Gamertag FROM perfil WHERE email= '$email' AND contraseña = '$contra'";
    $resultado= $conexion->query($query);
    $resultado2 = $resultado->fetch_assoc();
    if($resultado){
        $_SESSION['Gamertag'] = $resultado2["Gamertag"];
        header("location: principal.php");
        die();
    }else{
        header("location: ../login.html?fallo=true");
    }

}



?>