<?php

session_start();

$username=  $_POST["user"];
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

//$_SESSION['id-u']= $filas[0][0];

if($filas)
	header('location:../views/registroTorneo.php?id='.$id);  
else
	header("location:../views/Login.html"); 

$filas= null;
$conexion=null;
$consulta=null;


?>
