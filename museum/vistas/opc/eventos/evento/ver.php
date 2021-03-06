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

     <a href="../../../../includes/logout.php"> 
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
	 <table>
     <thead>
       <tbody>
         <thead>
                  <tr>
                    <td>ID</td>
                    <td>EVENTO</td>
                    <td>NOMBRE</td>
                    <td>APELLIDOS</td>
                    <td>PROCEDENCIA</td>
                    <td>CORREO ELECTRONICO</td>
                    <td>TELEFONO</td>
                    <td>WHATSAPP</td>
                    <td>ACOMPAÑANTES</td>
                    <td>EDITAR</td>
                    <td>ELIMINAR</td>
                  </tr>
          </thead>

         <!--Regresamos el nombre del evento -->
          <?php
            
            include("conectar.php");
            $query="SELECT * FROM eventos ";
            $resultado= $conexion->query($query);
            while ($row=$resultado->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $row['idevento']; ?></td>
              <td><?php echo $row['evento']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['apellidos']; ?></td>
              <td><?php echo $row['procedencia']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['whats']; ?></td>
              <td><?php echo $row['tel']; ?></td>
              <td><?php echo $row['acom']; ?></td>
              <td>
                <a href="../../../../vistas/opc/eventos/evento/modificar.php?idevento=<?php echo $row['idevento'];?>">
                  <img class="editar" src="../../../../vistas/imagen/edit.jpg" alt="Editar" title="Editar" width="35" height="35"></a> 
              </td>
              <td>
                <a href="../../../../vistas/opc/eventos/evento/eliminar.php?idevento=<?php echo $row['idevento'];?>">
                  <img class="editar" src="../../../../vistas/imagen/elim.jpg" alt="Eliminar" title="Eliminar" width="35" height="35"></a> 
              </td>
            </tr>

          <?php
            }
          ?>
        </tbody>
      </thead>
    </table>

<br><br><a href="../../../../vistas/opc/eventos/ver.php"> <input type="submit"  value = "Regresar"></a>
</center>
       

</body>
</html>