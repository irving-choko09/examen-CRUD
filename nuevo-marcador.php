<?php ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Marcador de encuentro</title>
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
						<h1>Asignar estadisticas para equipos</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<form method="post">
									<table>
										
										<tr>
											<td>Seleccione el equipo</td>
											<td><select name="equipo">
												<option>Seleccione</option>
												<?php
											include 'base_datos.php';
 
										//query from the table that we create
										$sql = "SELECT rowid, * FROM equipos";
										$query = $db->query($sql);
										while($row = $query->fetchArray()){
				echo "<option value='".$row['nombre_equipo']."'>".$row['nombre_equipo']."</option>";
			}
										?>

											</select></td>
										</tr>
										<tr>
											<td>Puntos anotados:</td>
											<td><input type="number" name="anotados"></td>
										</tr>
										<tr>
											<td>Puntos en contra:</td>
											<td><input type="number" name="contra"></td>
										</tr>
										<tr>
											<td>Puntos:</td>
											<td><select name="puntos">
												<option>Selecione</option>
												<option value="1">1</option>
												<option value="2">2</option></td>
										</tr>
										<tr>
											<td><center><input type="button" value="Regresar" style='background-color:#97F6F6' class='button button5' onclick=location.href="index.php"></td>
											<td><center><input type="submit" name="save" style="background-color:#96F984" class="button button5"></td>
										</tr>
									</table>
									<h4>Nota: equipo que gana se le asigna 2 puntos, equipo que pierde 1 punto.
								
</form>
								<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'estadisticas.php';



			$nombre_equipo = $_POST['equipo'];
			$anotados = $_POST['anotados'];
			$contra = $_POST['contra'];
			$puntos = $_POST['puntos'];

			$existe = "SELECT count(*) FROM estadisticas WHERE nombre_equipo='".$nombre_equipo."'";
			$exite2 = $db->query($existe);
 			$rowExi = $exite2->fetchArray();

 			if ($rowExi['count(*)']=='0') {
 			$anterior = "SELECT  rowid, *FROM estadisticas WHERE nombre_equipo='".$nombre_equipo."'";
 			$anterior2 = $db->query($anterior);
 			$rowAnt = $anterior2->fetchArray();
 			
 			$AntFavor = $rowAnt['anotados']; 
 			$NueFavor = $anotados;
 			$FinFavor = $AntFavor + $NueFavor;

 			$AntCon = $rowAnt['contra'];
 			$NueCon = $contra;
 			$FinCon = $NueCon  + $AntCon; 

 			$AntPun = $rowAnt['puntos'];
 			$NuePun = $puntos;
 			$FinPun = $AntPun  + $NuePun; 
		
		$sql = "INSERT INTO estadisticas (nombre_equipo, anotados, contra,puntos) VALUES ('".$_POST['equipo']."','".$FinFavor."', '".$FinCon."', '".$FinPun."')";
		$db->exec($sql);
 			}

 			 else {
 			$anterior = "SELECT  rowid, *FROM estadisticas WHERE nombre_equipo='".$nombre_equipo."'";
 			$anterior2 = $db->query($anterior);
 			$rowAnt = $anterior2->fetchArray();
 			
 			$AntFavor = $rowAnt['anotados']; 
 			$NueFavor = $anotados;
 			$FinFavor = $AntFavor + $NueFavor;

 			$AntCon = $rowAnt['contra'];
 			$NueCon = $contra;
 			$FinCon = $NueCon  + $AntCon; 

 			$AntPun = $rowAnt['puntos'];
 			$NuePun = $puntos;
 			$FinPun = $AntPun  + $NuePun; 

 			$sql = "UPDATE estadisticas SET anotados = '$FinFavor', contra = '$FinCon' , puntos = '$FinPun' WHERE nombre_equipo = '".$nombre_equipo."'";
			$db->exec($sql);		
 			}


 			

echo'<script type="text/javascript">
	alert("Las estadisticas se guardaron correctamente.");
		        window.location.href="nuevo-marcador.php";
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