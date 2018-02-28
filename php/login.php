<?php

session_start();

$username=  $_POST["user"];
//$password= base64_encode($_POST["password"]);
$password= $_POST["password"];

$admin;


require_once('conexionDB.php');

$consulta= $conexion->prepare("SELECT id_equipo, user_equipo, password_equipo, admin FROM equipos WHERE user_equipo= :username AND password_equipo= :pass");

$consulta->execute([
		'username'=> $username,
		'pass'=> $password,
		
	]);

$filas= $consulta->fetchAll();

//print_r($filas[0][0]);
$id=$filas[0][0];

$_SESSION['id-user'] = $id;
//$_SESSION['id-u']= $filas[0][0];

$error = 1;

if($filas && $filas[0][3] == 0)
	header('location:../views/registroTorneo.php?');
else if($filas && $filas[0][3] == 1)
	header('location:../views/adminPanel.php');
else
	header("location:../views/Login.php"); 

$filas= null;
$conexion=null;
$consulta=null;


?>
