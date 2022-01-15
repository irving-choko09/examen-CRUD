<?php 
	include 'base_datos.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM equipos";
	$db->query($sql);
	echo'<script type="text/javascript">	
		        window.location.href="reset-esta.php";
	  </script>'; 

?>