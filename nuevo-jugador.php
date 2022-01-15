<!DOCTYPE HTML>
<html>
	<head>
		<title>Nuevo jugador</title>
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
									<td>Nombre del jugador:</td>
									<td><input type="text" name="nombre_jugador" required></td>
								</tr>
								<tr>
									<td>Numero del jugador:</td>
									<td><input type="number" name="numero_jugador" required>
										<input type="hidden" name="equipo" value="<?php echo $equipo =$_GET['equipo'];?>"></td>
								</tr>
								<tr>
									<td>
										<input type="button" value="Regresar" onclick="location.href='editar-equipo-unico.php'" style="background-color:#51F5E3" class="button button5">
										
									</td>
									<td>
										<input type="submit" name="save" style="background-color:#51F5E3" class="button button5">
									</td>
								</tr>
							</table>
					</form>
					<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'base_datos.php';
 
		//insert query
		$sql = "INSERT INTO jugadores (nombre_jugador, numero_jugador, equipo) VALUES ('".$_POST['nombre_jugador']."','".$_POST['numero_jugador']."', '".$_POST['equipo']."')";
		$db->exec($sql);

 echo'<script type="text/javascript">
	alert("El nuevo jugador se guardo correctamente.");
		        window.location.href="editar-equipo.php";
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