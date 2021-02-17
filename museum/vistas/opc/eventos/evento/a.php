<center>
		<table >
			<thead>
					<!--<th><a href="index.php">Nuevo</a></th>-->
				<h1>Registrados en el evento</h1>
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
								<a href="../../../../vistas/opc/eventos/modificar.php?idevento=<?php echo $row['idevento'];?>">
    							<img class="editar" src="../../../../vistas/imagen/edit.jpg" alt="Editar" title="Editar" width="35" height="35"></a> 
							</td>
							<td>
								<a href="../../../../vistas/opc/eventos/eliminar.php?idevento=<?php echo $row['idevento'];?>">
    							<img class="editar" src="../../../../vistas/imagen/elim.jpg" alt="Eliminar" title="Eliminar" width="35" height="35"></a> 
							</td>
						</tr>

					<?php

						}
					?>
				}
				</tbody>
			</thead>
		</table>


		<br><br><a href="../../../../vistas/opc/eventos/nuevo.php">
		<input type="submit" value="REGISTRAR EVENTO"></a>

		<br><br><a href="../../../../vistas/opc/eventos/ver.php"> <input type="submit"  value = "Regresar"></a>
	</center>