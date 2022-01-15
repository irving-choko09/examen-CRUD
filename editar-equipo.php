<!DOCTYPE HTML>
<html>
	<head>
		<title>Editar información de equipos</title>
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
						<h1>Editar información de los equipos</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<table>
										<thead>											
											<td><b><center>Nombre</b></th>
											<td><b><center>Municipio</b></th>
											<td  colspan="2"><b><center>Acciones</b></th>
										</thead>
	<tbody>
		<?php
			//include our connection
			include 'base_datos.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM equipos";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo "
					<tr>						
						<td><center>".$row['nombre_equipo']."</td>
						<td><center>".$row['municpio_equipo']."</td>					
						<td><center>
						<input type='button' value='Editar equipo' style='background-color:#FBFB75' class='button button5'  onclick=location.href='editar-equipo-unico.php?nombre_equipo=".$row['nombre_equipo']."&id_equipo=".$row['rowid']."'>											
						<input type='button' value='Eliminar equipo' style='background-color:#E67676' class='button button5'  onclick=location.href='eliminar-equipo.php?nombre_equipo=".$row['nombre_equipo']."&id_equipo=".$row['rowid']."'>	
						</td>
					</tr>
				";
			}
		?>
	</tbody>
	<tr>
		<td colspan="4"><center><input type="button" value="Regresar"  style='background-color:#97F6F6' class='button button5' onclick=location.href="index.php"></center></td>
	</tr>

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