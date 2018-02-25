<?php

$idTorneo = $_POST['nombreTorneo'];
$cantParticipantes = $_POST['cantParticipantes'];
$nivel = $_POST['categoria'];
$idRegistro = $_POST['idRegistro']+1;



if($nivel === 'principiante')
	$categoria = 1;
else if($nivel === 'aficionado')
	$categoria = 2;
else
	$categoria = 3;

require_once('conexionDB.php');

$query = "UPDATE registros SET id_torneo = :idTorneo, categoria = :categoria, cant_participantes = :cantParticipantes WHERE id_registro = '$idRegistro' ";

$data= $conexion->prepare($query);

$dataSend= $data->execute(array(
    ":idTorneo" => $idTorneo,
    ":categoria" => $categoria,
    ":cantParticipantes" => $cantParticipantes
));


echo $idTorneo . ' ' . $cantParticipantes .' '. $categoria . ' '. $idRegistro;

if($dataSend)
   header("location: ../views/adminPanel.php");