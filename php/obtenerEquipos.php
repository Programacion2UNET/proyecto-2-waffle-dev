<?php

include('../equipo.php');

session_start();

require_once('conexionDB.php');

$consulta= $conexion->prepare("SELECT * FROM equipos");

$consulta->execute();

$filas= $consulta->fetchAll();

//var_dump($filas[0]);

for($i = 0; $i < count($filas); $i++){
	$equipos[$i] = new Equipo($filas[$i][0], $filas[$i][1], $filas[$i][2], $filas[$i][3], $filas[$i][4] , $filas[$i][5], $filas[$i][6], $filas[$i][7], $filas[$i][8] );
}
