<?php
//Create a new SQLite3 Database
$db = new SQLite3('liga.db');
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS equipos (nombre_equipo STRING, municpio_equipo STRING, nombre_encargado STRING, telefono_equipo STRING)";
$db->exec($query);
 
?>