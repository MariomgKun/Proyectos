<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" href="../css/semantic.min.css">
	<link rel="stylesheet" href="../css/semantic.css">
	<link rel="stylesheet" href="../css/perfil.css">
	<link rel="stylesheet" href="../js/jquery-3.5.1.min.js">
	<link rel="stylesheet" href="../js/semantic.js">
  <link rel="stylesheet" href="../js/semantic.min.js">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
	<script src="../js/semantic.min.js"></script>
</head>
<body>
	<!--Menu superior-->
	<div class="ui menu">	
        <a class="item" href="principal.php">WolfBattles</a>
        <?php
        session_start();
        $aux= $_SESSION['Gamertag'];
        echo "<a class='item' > $aux </a>"; 
        ?>
		<div class="right menu">
		  <a class="item" href="logout.php">Salir</a>
		</div>
	</div>
    <?php
      include("Conexion.php");
      session_start();
      $aux= $_SESSION['Gamertag'];
    ?>

	<div class="contForm">
        <div class="contPortada">
            <div class="ui black four item inverted menu">
				<a class="item" href="juegos.php">Juegos</a>
				<a class="item" href="torneos.php">Torneos</a>
        <a class="item" href="clasificacion.php">Clasificaciones</a>
        <a class="item" href="perfil.html">Cuenta</a>
			</div>
			<div class="contForm">
				<div class="sigInContainer">
					<div class="ui top attached tabular menu">
						<a class="item active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						  Perfil</font></font> </a>
              </div>
					  <div class="ui bottom attached segment">
              <p></p>
              <?php
                $query = "SELECT * FROM perfil WHERE Gamertag= '$aux'";
                $resultado= $conexion->query($query);

                if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                  echo 
                  '<div class="ui raised segments"><div class="ui segment"><p>id: ' . $row["idPerfil"].
                  '</div><div class="ui segment"></p><p>Nombre: ' . $row["Nombre"]. " " . $row["Apellido"]. 
                  '</div><div class="ui segment"></p><p>Email:  '. $row["Email"]. 
                  '</div><div class="ui segment"></p><p>Gamertag: ' . $row["Gamertag"]. '</p></div></div>';
                }
                } else {
                echo "0 results";
              }?>
              <!-- Boton eliminar -->
              <form action="" name="eliminar" method="POST">
						    <button class="ui red button" name="boton" type="submit" value="b">Eliminar</button>
					    </form>
					  </div>
            
		    </div>
		  </div>
		</div>

    </div>

	<footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>
</body>
</html>