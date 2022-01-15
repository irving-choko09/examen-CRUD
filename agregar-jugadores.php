<!DOCTYPE HTML>
<html>
	<head>
		<title>Agregar jugadores a equipo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<?php
			$equipo =$_GET['equipo'];

		?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Jugadores para equipo <?php echo $equipo;?></h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
						<form method="post" >		
							<?php 
							$numero=$_GET['jugadores'];
							$equipo =$_GET['equipo'];
							for ($i=0; $i < $numero ; $i++) { 
							?>
						
							<table>
								<tr>
									<td>Nombre del jugador:</td>
									<td><input type="text" name="nombre_jugador[]" required></td>
								</tr>
								<tr>
									<td>Numero del jugador:</td>
									<td><input type="number" name="numero_jugador[]" required>
										<input type="hidden" name="equipo[]" value="<?php echo $equipo =$_GET['equipo'];?>"></td>
								</tr>
								
							<?php 
							
									}
							?>
							<tr>
									<td>
										<input type="button" value="Regresar" onclick="location.href='index.php'" style="background-color:#51F5E3" class="button button5">
										
									</td>
									<td>
										<input name="save" type="submit" style="background-color:#51F5E3" class="button button5">
									</td>
								</tr>
							</table>
					</form>

					<?php
	if(isset($_POST['save'])){
		//include our connection		
	 include 'jugadores_base.php';	
 	 $nombre_jugador=$_POST['nombre_jugador']; 
	 $numero_jugador=$_POST['numero_jugador']; 
	 $equipo=$_POST['equipo']; 


	foreach($nombre_jugador as $index => $nombre_jugadors){
		  $s_nombre_jugador = $nombre_jugador[$index];
		  $s_numero_jugador = $numero_jugador[$index];
		  $s_nombre_equipo = $equipo[$index];
		//insert query	
 $sql = "INSERT INTO jugadores (nombre_jugador, numero_jugador, equipo) VALUES ('".$s_nombre_jugador."', '".$s_numero_jugador."', '".$s_nombre_equipo."')";
$db->exec($sql);

			echo'<script type="text/javascript">
alert("Jugadores guardados correctamente.");
		        window.location.href="index.php";
	     </script>'; 
	}
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