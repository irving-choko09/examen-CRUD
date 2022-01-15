<!DOCTYPE HTML>
<html>
	<head>
		<title>Editar información de equipo unico</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Editar información de equipo</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<center><h2>Datos del equipo</h2>
								
		<?php
			//include our connection
			include 'base_datos.php';
		 	//get the row of selected id
		 	$nombre = $_GET['id_equipo'];
			$sql = "SELECT rowid, * FROM equipos WHERE rowid = '".$nombre."'";
			$query = $db->query($sql);
			$row = $query->fetchArray();
			
		?>
		<form method="POST">

	<p>
		<label >Nombre del equipo:</label>
		<input type="text"  name="nombre_equipo" value="<?php echo $row['nombre_equipo']; ?> " readonly>
	</p>
	<p>
		<label >Municipio del equipo:</label>
		<input type="text"  name="municpio_equipo" value="<?php echo $row['municpio_equipo']; ?>">
	</p>
	<p>
		<label>Representante del equipo:</label>
		<input type="text"  name="nombre_encargado" value="<?php echo $row['nombre_encargado']; ?>">
	</p>
	<p>
		<label>Número telefonico del representante del equipo:</label>
		<input type="number"  name="telefono_encargado" value="<?php echo $row['telefono_equipo']; ?>">
	</p>
	<input type="submit" name="save" value="Guardar cambios">
</form>
<?php
	if(isset($_POST['save'])){
		$nombre_equipo = $_POST['nombre_equipo'];
		$municpio_equipo = $_POST['municpio_equipo'];
		$nombre_encargado = $_POST['nombre_encargado'];
		$telefono_equipo = $_POST['telefono_encargado'];
 
		//update our table
		$sql = "UPDATE equipos SET nombre_equipo = '$nombre_equipo', municpio_equipo = '$municpio_equipo', nombre_encargado = '$nombre_encargado', telefono_equipo = '$telefono_equipo' WHERE rowid = '".$nombre."'";
		$db->exec($sql);
 echo'<script type="text/javascript">
alert("Se realizaron los cambios correctamente.");
		        window.location.href="editar-equipo.php";
	     </script>'; 
	}
?>
	</tbody>


										</table>
<br>
									<center><h2>Jugadores del equipo</h2>
						
									<table>
										<thead>											
											<td><b><center>Nombre del jugador</b></td>
											<td><b><center>Equipo al que pertenece</b></td>
											<td><b><center>Numero</b></td>	
											<td><b><center>Acciones</b></td>	
											
										</thead>
	<tbody>
		<?php
			
			//include our connection
			include 'jugadores_base.php';
 			$nombre2 = $_GET['nombre_equipo'];
			//query from the table that we create
			$sql2 = "SELECT rowid, * FROM jugadores WHERE equipo = '".$nombre2."'";
			$query2 = $db->query($sql2);
 
			while($row2 = $query2->fetchArray()){
				echo "
					<tr>						
						<td><center>".$row2['nombre_jugador']."</td>
						<td><center>".$row2['equipo']."</td>	
						<td><center>".$row2['numero_jugador']."</td>		
						<td><center>
						<input type='button' value='Editar jugador' style='background-color:#FBFB75' class='button button5'  onclick=location.href='editar-jugador.php?id_jugador=".$row2['rowid']."'>											
						<input type='button' value='Eliminar jugador' style='background-color:#E67676' class='button button5'  onclick=location.href='eliminar-jugador.php?id_jugador=".$row2['rowid']."'>	
						</td>
					</tr>
				";
			}
		?>
		<tr>
			<td colspan="2"><center><input type="button" value="Regresar"  style='background-color:#97F6F6' class='button button5' onclick=location.href="editar-equipo.php"></center></td>
			<td colspan="2"><center><input type="button" value="Agregar nuevo jugador"  style='background-color:#96F984' class='button button5' onclick=location.href="nuevo-jugador.php?equipo=<?php echo $nombre2;?>"></center></td>

	</tbody>



										</table>									
							</section>							

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Liga de Baloncesto "TULA"</p>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>