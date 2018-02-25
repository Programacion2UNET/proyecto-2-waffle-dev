<?php

session_start();

$username=  $_POST["user"];
$password= $_POST["password"];
$admin;

$conexion= null;
$consulta= null;

//conexión con la base de datos

$conexion= new PDO('mysql:host=localhost; dbname=SistemaTorneosDeportivos', 'root',''); 

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta= $conexion->prepare("SELECT id_equipo, user_equipo, password_equipo, admin FROM equipos WHERE user_equipo= :username AND password_equipo= :pass");

$consulta->execute([
		'username'=> $username,
		'pass'=> $password,
		
	]);

$filas= $consulta->fetchAll();

//print_r($filas[0][0]);
//$id=$filas[0][0];

//$_SESSION['id-u']= $filas[0][0];

if($filas && $filas[0][3]==0)
	header("location:../views/registroTorneo.php");  
else if($filas && $filas[0][3]==1)
	header("location:../views/Login.html"); 
else
    header("location:../index.html");

$filas= null;
$conexion=null;
$consulta=null;


?>
