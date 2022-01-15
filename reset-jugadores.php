<?php 
	include 'jugadores_base.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM jugadores ";
	$db->query($sql);
	echo'<script type="text/javascript">
	alert("Liga reseteada correctamente.");
		        window.location.href="index.php";
										        </script>'; 

?>