<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="../../../main2.css">
    <link rel="stylesheet" href="../../../tabla.css">

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
      <a href="../../../vistas/opc/reservas/index.php">Reservas</a>
      <a href="../../../vistas/opc/visitantes/index.php">Visitantes</a>
      <a href="../../../vistas/opc/domingo/index.php">Domingos</a>
      <a href="../../../vistas/opc/eventos/ver.php">Eventos</a>
      <a href="../../../vistas/opc/usuario/ver.php">Usuarios</a>
    </div>
    </nav>

	<center>
		<h1>Bienvenido a reservas</h1>
	</center>
</body>
</html>