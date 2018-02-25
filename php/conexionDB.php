<?php

$conexion= null;
$consulta= null;

//conexión con la base de datos

$conexion= new PDO('mysql:host=localhost; dbname=SistemaTorneosDeportivos', 'root',''); 

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>