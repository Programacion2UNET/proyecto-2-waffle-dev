<?php
require_once('../php/obtenerRegistros.php');
require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');

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

$TorneoRegistrado=0;

	echo $idEquipo;
	echo $idTorneo;
	echo $categoria;

	echo "<br>";

	for ($i=0; $i <count($registros) ; $i++) { 
		echo $registros[$i]->GetIdEquipo();
		echo $registros[$i]->GetIdTorneo();
		echo $registros[$i]->GetCategoria();
		echo "<br>";
		if($idEquipo == $registros[$i]->GetIdEquipo() && $idTorneo == $registros[$i]->GetIdTorneo() && $categoria == $registros[$i]->GetCategoria()){

			$TorneoRegistrado=1;
		}
	}

if($TorneoRegistrado==0){



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
}
else{

header("location:../views/registroTorneo.php");


}