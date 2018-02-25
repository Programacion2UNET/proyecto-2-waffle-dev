<?php

include('../torneo.php');


require_once('conexionDB.php');

$consulta= $conexion->prepare("SELECT * FROM torneos");

$consulta->execute();

$filas= $consulta->fetchAll();

//var_dump($filas[0][1]);

for($i = 0; $i < count($filas); $i++){
	$torneos[$i] = new Torneo($filas[$i][0], $filas[$i][1], $filas[$i][2]);
}
