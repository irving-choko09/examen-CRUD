<?php
	//include our connection
	include 'base_datos.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM equipos WHERE rowid = '".$_GET['id_equipo']."'";
	$db->query($sql);


	include 'jugadores_base.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM jugadores WHERE equipo = '".$_GET['nombre_equipo']."'";
	$db->query($sql);
 
	echo'<script type="text/javascript">
	alert("El equipo fue eliminado correctamente.");
		        window.location.href="index.php";
										        </script>'; 
										    ?>