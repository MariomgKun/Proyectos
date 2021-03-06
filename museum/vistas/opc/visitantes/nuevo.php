<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="../../../main2.css">
    <link rel="stylesheet" href="../../../table.css">

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
     <img class="cerrar-sesion" src="../../../vistas/imagen/salir.jpg" alt="Salir" title="Cerrar Sesion" width="35" height="35"></a> 
    
        

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
      
      <a href="../../../index.php">Inicio</a>
      <a href="../../../vistas/opc/reservas/ver.php">Reservas</a>
      <a href="../../../vistas/opc/visitantes/ver.php">Visitantes</a>
      <a href="../../../vistas/opc/domingo/ver.php">Domingos</a>
      <a href="../../../vistas/opc/eventos/ver.php">Eventos</a>
      <a href="../../../vistas/opc/usuario/ver.php">Usuarios</a>
    </div>
    </nav>

  <center>

    <form action="guardar.php" method="POST">
      <p>Nombre: <input type="text" name="nombre"></p><br>
      <p>Apellidos: <input type="text" name="apellido" ></p><br>
      <p>Procedencia: <input type="text" name="procedencia" ></p><br>
      <p>Profesor: <input type="number" name="profesor"></p><br>
      <p>Estudiante Basico: <input type="number" name="estudiantebas"></p><br>
      <p>Estudiante Superior: <input type="number" name="estudiantesup"></p><br>
      <p>Jubilado / 3ra Edad: <input type="number" name="jubilado"></p><br>
      <p>Discapacitado: <input type="number" name="discapacitado"></p><br>
      <p>Extranjero: <input type="number" name="extranjero"></p><br>
      <p>Cuota: <input type="number" name="cuota"></p><br>
      <p><input type="submit"  value = "Guardar"></p>
    </form>
    
    <br><a href="../../../vistas/opc/visitantes/ver.php"> <input type="submit"  value = "Cancelar"></a>
  </center>
</body>
</html>


    
