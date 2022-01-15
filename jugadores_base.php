<?php
//Create a new SQLite3 Database
$db = new SQLite3('liga.db');
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS jugadores (nombre_jugador STRING, numero_jugador STRING, equipo STRING)";
$db->exec($query);
 
?>