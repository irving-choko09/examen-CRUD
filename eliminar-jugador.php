
<?php
	//include our connection
	 include 'jugadores_base.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM jugadores WHERE rowid = '".$_GET['id_jugador']."'";
	$db->query($sql);
 
	echo'<script type="text/javascript">
	alert("El equipo fue eliminado correctamente.");
		        window.location.href="index.php";
										        </script>'; 

										       ?> 