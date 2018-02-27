<?php

$nombre = $_POST['nombreTorneo'];
$fecha = $_POST['fechaTorneo'];

//echo $nombre .'  '. $fecha;

require_once('conexionDB.php');

$query= "INSERT INTO torneos (nombre_torneo, fecha_torneo ) VALUES (:nombre, :fecha)";

$data= $conexion->prepare($query);

$dataSend= $data->execute(array(
    ":nombre" => $nombre,
    ":fecha" => $fecha
));


if($dataSend)
    header("location:../views/adminPanel.php");
else
    header("location:../views/crearTorneo.php");