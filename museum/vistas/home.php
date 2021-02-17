<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="date.css">
    <link rhref='http://font.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

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

    <!-- SALUDO Y BOTON DE SALIDA -->
     <a href="includes/logout.php"> 
     <img class="cerrar-sesion" src="vistas/imagen/salir.jpg" alt="Salir" title="Cerrar Sesion" width="50" height="50"></a> 
    <h1> " Hola de nuevo: <?php echo $user->getNombre();  ?>   "</h1>
    
        
    <!-- MENU DESPLEGABLE -->
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
      
      <a href="index.php">Inicio</a>
      <a href="vistas/opc/reservas/ver.php">Reservas</a>
      <a href="vistas/opc/visitantes/ver.php">Visitantes</a>
      <a href="vistas/opc/domingo/ver.php">Domingos</a>
      <a href="vistas/opc/eventos/ver.php">Eventos</a>
      <a href="vistas/opc/usuario/ver.php">Usuarios</a>
    </div>
    </nav>

    <!-- TITULO -->
    <center>
        <h2>Museo Fuerte de Guadalupe</h2>

    <!-- RELOJ Y CALENDARIO -->
    <div class="wrap">
        <div class="widget">
            <div class="fecha">
                <p id="diasemana" class="diasemana"></p>
                <p id="dia" class="dia"></p>
                <p>de </p>
                <p id="mes" class="mes"></p>
                <p>del</p>
                <p id="year" class="year"></p>
            </div>

            <div class="reloj">
                <p id="horas" class="horas"></p>
                <p>:</p>
                <p id="minutos" class="minutos"></p>
                <p>:</p>
                <div class="caja-segundos">
                    <p id="ampm" class="ampm"></p>
                    <p id="segundos" class="segundos"></p>
                </div>
            </div>
        </div>
    </div>
    <script src="reloj.js"></script>
  </center>

    <!-- CARRUSEL DE FOTOS 
      PARA AGREGAR FOTOS DEBES GUARDAR EN LA CARPETA: vistas/imagen/
      Y AGREGAR UNA LINEA COMO LAS DE ABAJO ASI: 
      <li><img src="vistas/imagen/NOMBREIMAGEN.jpg" alt="MENSAJE ALTERNATIVO"></li>
    --> 
    <div class="slider">
        <ul>
          <li><img src="vistas/imagen/mufegu.jpg" alt="logo1"></li>
          <li><img src="vistas/imagen/servicio.jpg" alt="servicio social"></li>
          <li><img src="vistas/imagen/a1.jpg" alt="mensaje 1"></li>
          <li><img src="vistas/imagen/a2.jpg" alt="mensjae 2"></li>
        </ul>
    </div>

</body>
</html>