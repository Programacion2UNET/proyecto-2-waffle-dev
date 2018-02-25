<?php

$idTorneo = $_POST['nombreTorneo'];
$cantParticipantes = $_POST['cantParticipantes'];
$nivel = $_POST['categoria'];
$idEquipo = $_POST['id_equipo'];

if($nivel === 'principiante')
	$categoria = 1;
else if($nivel === 'aficionado')
	$categoria = 2;
else
	$categoria = 3;


require_once('conexionDB.php');

$query= "INSERT INTO registros (id_torneo, id_equipo, categoria, cant_participantes) VALUES (:idTorneo, :idEquipo, :categoria, :cantParticipantes)";

$consulta = $conexion->prepare($query);

$dataSend= $consulta->execute([
		':idTorneo' => $idTorneo,
		':idEquipo' => $idEquipo,
		':categoria' => $categoria,
		':cantParticipantes' => $cantParticipantes
	]);



if($dataSend)
    header('location:../views/listadoTorneos.php?idTorneo='.$idTorneo.'&idEquipo='.$idEquipo);
else
    header("location:../views/registroTorneo.php");