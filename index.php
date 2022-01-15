<!DOCTYPE HTML>

<html>
	<head>
		<title>Liga Basquetbolista "TULA"</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo-basket.png" style="border-radius: 20px;height: 200px; width: 200px;" /></span>
						<h1>LIGA DE BALONCESTO "TULA"</h1>						
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#equipos" class="active">Estadisticas de la liga</a></li>
							<li><a href="#jugadores">Jugadores</a></li>
							<li><a href="#alta-equipo">Configuraciones</a></li>						
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="equipos" class="main special">
								
										<header class="major">
											<h2>Estadisticas de la liga</h2>
										</header>
										<table>
										<thead>											
											<td><b>Equipo</b></td>
											<td><b>Puntos a favor</b></td>
											<td><b>Puntos en contra</b></td>
											<td><b>Average</b></td>
											<td><b>Puntos</b></td>
										</thead>
	<tbody>
		<?php
			//include our connection
			include 'base_datos.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM estadisticas
					ORDER BY puntos DESC";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				$con = $row['contra'];
				$fav = $row['anotados'];
				$avg = $fav - $con;
				echo "
					<tr>						
						<td>".$row['nombre_equipo']."</td>
						<td>".$row['anotados']."</td>	
						<td>".$row['contra']."</td>	
						<td>".$avg."</td>	
						<td>".$row['puntos']."</td>					
						
					</tr>
				";
			}
		?>
	</tbody>


										</table>
										
									
							</section>

						<!-- First Section -->
							<section id="jugadores" class="main special">
								<header class="major">
									<h2>Jugadores de la liga</h2>
								</header>
									<table>
										<thead>											
											<td><b>Nombre del jugador</b></td>
											<td><b>Equipo al que pertenece</b></td>
											<td><b>Numero</b></td>	
											
										</thead>
	<tbody>
		<?php
			//include our connection
			include 'jugadores_base.php';
 
			//query from the table that we create
			$sql2 = "SELECT rowid, * FROM jugadores";
			$query2 = $db->query($sql2);
 
			while($row2 = $query2->fetchArray()){
				echo "
					<tr>						
						<td>".$row2['nombre_jugador']."</td>
						<td>".$row2['equipo']."</td>	
						<td>".$row2['numero_jugador']."</td>		
					
					</tr>
				";
			}
		?>
	</tbody>


										</table>
										
								
							</section>

						<!-- Second Section -->
							<section id="alta-equipo" class="main special">
								<header class="major">
									<h2>Configuraciones</h2>
									<table>
										<tr>
											<td><input type="button" value="Agregar nuevo equipo" style="background-color:#51F5E3" class="button button5" onclick="location.href='nuevo-equipo.php'"></td>
											<td><input type="button" value="Editar informacion de un equipo" style="background-color:#51F5E3" class="button button5" onclick="location.href='editar-equipo.php'"></td>
										</tr>
										<tr>
											<td><input type="button" value="Asignar estadisticas para equipos" style="background-color:#51F5E3" class="button button5" onclick="location.href='nuevo-marcador.php'"></td>
											<td><input type="button" value="Resetear Liga" style="background-color:#51F5E3" class="button button5" onclick="location.href='resetear-liga.php'"></td>
										</tr>
									</table>
									
									<br>
									<br>
									
									
								</header>
								
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