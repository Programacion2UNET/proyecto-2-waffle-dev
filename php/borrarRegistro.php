<?php

$idRegistro = $_POST['id-for']+1;

//echo $idRegistro;


require_once('conexionDB.php');

$query= "DELETE FROM registros WHERE id_registro = $idRegistro";
$data= $conexion->prepare($query);

$dataSend = $data->execute();

if($dataSend)
	header("location: ../views/adminPanel.php");