<?php

$nombre = $_POST['team'];
$shortname = $_POST['nombre_corto'];
$fecha = $_POST['fecha_creacion'];
$direccion = $_POST['direccion'];
$email = $_POST['correo'];
$web = $_POST['sitio_web'];
$user= $_POST["user"];
$password= $_POST["password"];
$admin=0;


require_once('conexionDB.php');

$query= "INSERT INTO equipos (nombre_equipo, shortname_equipo, fecha_equipo, direccion_equipo, email_equipo, web_equipo, user_equipo, password_equipo ,admin) VALUES (:nombre, :shortname, :fecha, :direccion, :email, :web, :user, :password, :admin)";

$data= $conexion->prepare($query);

$dataSend= $data->execute(array(
    ":nombre" => $nombre,
    ":shortname" => $shortname,
    ":fecha" => $fecha,
    ":direccion" => $direccion,
    ":email" => $email,
    ":web" => $web,
    ":user"=>$user,
    ":password"=>$password,
    ":admin"=>$admin
));

if($dataSend)
    header("location:../views/Login.php");
else
    header("location:../views/SignUp.php");