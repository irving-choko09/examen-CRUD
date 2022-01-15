<!DOCTYPE HTML>
<html>
	<head>
		<title>Editar información de jugador</title>
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
						<h1>Editar información de jugador</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<center><h2>Datos del jugador</h2>
								
		<?php
			//include our connection
			include 'jugadores_base.php';
		 	//get the row of selected id
		 	$id_jugador = $_GET['id_jugador'];
			$sql = "SELECT rowid, * FROM jugadores WHERE rowid = '".$id_jugador."'";
			$query = $db->query($sql);
			$row = $query->fetchArray();
			
		?>
		<form method="POST">

	<p>
		<label >Nombre del jugador:</label>
		<input type="text"  name="nombre_jugador" value="<?php echo $row['nombre_jugador']; ?>">
	</p>
	<p>
		<label >Municipio del equipo:</label>
		<input type="text"  name="numero_jugador" value="<?php echo $row['numero_jugador']; ?>">
	</p>
	
	<input type="submit" name="save" value="Guardar cambios">
</form>
<?php
	if(isset($_POST['save'])){
		$nombre_jugador = $_POST['nombre_jugador'];
		$numero_jugador = $_POST['numero_jugador'];
		
		//update our table
		$sql = "UPDATE jugadores SET nombre_jugador = '$nombre_jugador', numero_jugador = '$numero_jugador' WHERE rowid = '".$id_jugador."'";
		$db->exec($sql);
 echo'<script type="text/javascript">
alert("Se realizaron los cambios correctamente.");
		        window.location.href="editar-equipo.php";
	     </script>'; 
	}
?>
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