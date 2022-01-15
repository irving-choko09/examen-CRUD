<?php 
	include 'estadisticas.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM estadisticas";
	$db->query($sql);
	echo'<script type="text/javascript">	
		        window.location.href="reset-jugadores.php";
	  </script>'; 

?>