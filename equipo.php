<?php

class Equipo 
{
	$user;
	$team;
	$nombre_corto;
	$fecha_creacion;
	$direccion;
	$correo;
	$sitio_web;
	$password;


	function __construct($user,	$team, $nombre_corto, $fecha_creacion, $direccion, $correo, $sitio_web, $password);
	{
		this->$user=$user;
		this->$team=$team;
		this->$nombre_corto=$nombre_corto;
		this->$fecha_creacion=$fecha_creacion;
		this->$direccion=$direccion;
		this->$correo=$correo;
		this->$sitio_web=$sitio_web;
		this->password=$password;
	}

	public function GetUser(){
		return $user;
	}
	public function GetTeam(){
		return $team;
	}
	public function GetNombreCorto(){
		return $nombre_corto;
	}
	public function GetFechaCreacion(){
		return $fecha_creacion;
	}
	public function GetDireccion(){
		return $direccion;
	}
	public function GetCorreo(){
		return $correo;
	}
	public function GetSitioWeb(){
		return $sitio_web;
	}
	public function GetPassword(){
		return $password;
	}




}



?>


