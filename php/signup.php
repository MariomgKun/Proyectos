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
</head>
<body>
	<!--Menu superior-->
	<div class="ui menu">
		<a class="item" href="index.html">WolfBattles</a>
    </div>
    <?php
      include("Conexion.php");
        session_start();
        $aux= $_SESSION['usuario'];
        echo "<a class='item' > $aux </a>"; 

        ?>

	<div class="contForm">
        <div class="contPortada">
            <div class="ui black four item inverted menu">
				<a class="item">Juegos</a>
				<a class="item" href="torneos.html">Torneos</a>
                <a class="item" href="clasificacion.html">Clasificaciones</a>
                <a class="item" href="perfil.html">Cuenta</a>
			</div>
			<div class="contForm">
				<div class="sigInContainer">
					<div class="ui top attached tabular menu">
						<a class="item active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						  Perfil
                        </font>
                    </font>   
                    </a>
                     </div>
                          <?php
                         $query = "SELECT * FROM perfil WHERE Gamertag= '$aux'";
                         $resultado= $conexion->query($query);

                        if ($resultado->num_rows > 0) {
                            while($row = $resultado->fetch_assoc()) {
                            echo "id: " . $row["idPerfil"]."</br>Nombre: " . $row["Nombre"]. " " . $row["Apellido"]. "</br>Email: " . $row["Email"]. "</br>Gamertag: " . $row["Gamertag"]. "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
						</div>
					  </div>
					  <div class="ui bottom attached segment">
						<p></p>
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