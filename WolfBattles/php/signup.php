<?php
  include("Conexion.php");


    $email = $_POST['Username'];
    $contraseña = $_POST['Password'];
    $gamertag = $_POST['Gamertag'];
    $contrasenia = $_POST['Password'];
    $plataf = $_POST["Plataforma"];
      switch ($_POST["Plataforma"]){
        case 0:
           $plataf = "Mobile";
        break;
        case 1:
          $plataf = "PC";
        break;
       case 2:
        $plataf = "Xbox";
        break;
        case 2:
          $plataf = "Play Station";
          break;

      }

    $nombre = $_POST['First_Name'];
    $apellido = $_POST['Segundo_Nombre'];

  $query = "INSERT INTO perfil(Email,Contraseña,Gamertag,Plataforma,Nombre,Apellido) VALUES('$email','$contraseña','$gamertag','$plataf','$nombre','$apellido')";


  if (mysqli_query($conexion, $query)) {
    session_start();
    $_SESSION["Gamertag"] =$gamertag ;
    header("location: principal.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }
  ?>