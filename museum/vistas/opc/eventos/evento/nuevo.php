<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="../../../../main2.css">
    <link rel="stylesheet" href="../../../../table.css">

     <script>
        function openSlideMenu(){
        document.getElementById('menu').style.width = '250px';
        document.getElementById('content').style.marginLeft = '250px';
        }
        function closeSlideMenu(){
        document.getElementById('menu').style.width = '0';
        document.getElementById('content').style.marginLeft = '0';
        }
    </script>

</head>
<body>

     <a href="../../../includes/logout.php"> 
     <img class="cerrar-sesion" src="../../../../vistas/imagen/salir.jpg" alt="Salir" title="Cerrar Sesion" width="35" height="35"></a> 
    
        

    <div id="content">

    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>

    <div id="menu" class="nav">
      <a href="#" class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a><br><br>
      
      <a href="../../../../index.php">Inicio</a>
      <a href="../../../../vistas/opc/reservas/ver.php">Reservas</a>
      <a href="../../../../vistas/opc/visitantes/ver.php">Visitantes</a>
      <a href="../../../../vistas/opc/domingo/ver.php">Domingos</a>
      <a href="../../../../vistas/opc/eventos/ver.php">Eventos</a>
      <a href="../../../../vistas/opc/usuario/ver.php">Usuarios</a>
    </div>
    </nav>

  <center>

    <!--Regresamos el nombre del evento -->
    <?php
    $ideventon= $_REQUEST['ideventon'];
    include("conectar.php");
    $query="SELECT * FROM evento WHERE ideventon='$ideventon'";
    $resultado= $conexion->query($query);
    $row=$resultado->fetch_assoc();
    ?>
    <form action="guardar.php?ideventon=<?php echo $row['ideventon'];?>" method="POST">
      <p>ID del Evento: <input type="text" name="ideventon" value="<?php echo $row['ideventon']?>"></p><br>
      <p>Nombre del Evento: <input type="text" name="evento" value="<?php echo $row['eventon']?>"></p><br>
    
      
      <p>Nombre: <input type="text" name="nombre"></p><br>
      <p>Apellidos: <input type="text" name="apellidos" ></p><br>
      <p>Procedencia: <input type="text" name="procedencia" ></p><br>
      <p>Correo Electronico: <input type="text" name="email" ></p><br>
      <p>Telefono: <input type="text" name="tel" ></p><br>
      <p>WhatsApp: <input type="text" name="whats" ></p><br>
      <p>Numero de Acompañantes: <input type="number" name="acom" ></p><br>
      <p><input type="submit"  value = "Guardar"></p>
    </form>
    
    <br><a href="../../../../vistas/opc/eventos/ver.php"> <input type="submit"  value = "Cancelar"></a>
  </center>
</body>
</html>


    
