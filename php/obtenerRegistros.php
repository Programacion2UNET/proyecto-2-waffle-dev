<?php

include('../registros.php');


require_once('conexionDB.php');

$consulta= $conexion->prepare("SELECT * FROM registros");

$consulta->execute();

$filas= $consulta->fetchAll();

//var_dump($filas[0]);


for($i=0; $i< count($filas); $i++){
	$registros[$i] = new Registro($filas[$i][0], $filas[$i][1], $filas[$i][2], $filas[$i][3], $filas[$i][4]);
}

