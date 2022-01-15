<!DOCTYPE HTML>
<html>
	<head>
		<title>Equipo nuevo</title>
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
						<h1>Nuevo equipo</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
						<form method="post" >		
							<table>
								<tr>
									<td>Nombre del equipo:</td>
									<td><input type="text" name="nombre_equipo" placeholder="Nombre corrido sin espacios" required></td>
								</tr>
								<tr>
									<td>Municipio del equipo:</td>
									<td><input type="text" name="municpio_equipo" required></td>
								</tr>
								<tr>
									<td>Nombre del representante del equipo:</td>
									<td><input type="text" name="nombre_encargado" required></td>
								</tr>
								<tr>
									<td>Teléfono del reprentante:</td>
									<td><input type="number" name="telefono_equipo" maxlength="10" required></td>
								</tr>
								<tr>
									<td>Número de jugadores para el equipo:</td>
									<td><select  name="numero_jug" required>
										<option>Seleciones una cantidad</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select></td>
								</tr>
								<tr>
									<td>
										<center><input type="button" value="Regresar" onclick="location.href='index.php'" style="background-color:#97F6F6" class="button button5">
										
									</td>
									<td>
										<center><input type="submit" name="save" style="background-color:#96F984" class="button button5">
									</td>
								</tr>
							</table>
					</form>
					<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'base_datos.php';
 
		//insert query
		$sql = "INSERT INTO equipos (nombre_equipo, municpio_equipo, nombre_encargado,telefono_equipo) VALUES ('".$_POST['nombre_equipo']."','".$_POST['municpio_equipo']."', '".$_POST['nombre_encargado']."', '".$_POST['telefono_equipo']."')";
		$db->exec($sql);

 echo'<script type="text/javascript">
	alert("Se guardo el equipo nuevo correctamente.");
		        window.location.href="agregar-jugadores.php?equipo='.$_POST['nombre_equipo'].'&jugadores='.$_POST['numero_jug'].'";
										        </script>'; 
										    }
 
	
?>
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