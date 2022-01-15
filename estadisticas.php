<?php
//Create a new SQLite3 Database
$db = new SQLite3('liga.db');
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS estadisticas (nombre_equipo STRING, anotados STRING, contra STRING, puntos STRING)";
$db->exec($query);
 
?>