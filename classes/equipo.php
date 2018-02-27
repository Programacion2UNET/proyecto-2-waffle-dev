<?php

class Equipo 
{
	private $id;
	private $user;
	private $team;
	private $nombre_corto;
	private $fecha_creacion;
	private $direccion;
	private $correo;
	private $sitio_web;
	private $password;


	function __construct($id,  $team, $nombre_corto, $fecha_creacion, $direccion, $correo, $sitio_web, $user, $password)
	{
		$this->id = $id;
		$this->user=$user;
		$this->team=$team;
		$this->nombre_corto=$nombre_corto;
		$this->fecha_creacion=$fecha_creacion;
		$this->direccion=$direccion;
		$this->correo=$correo;
		$this->sitio_web=$sitio_web;
		$this->password=$password;
	}

	public function GetId(){
		return $this->id;
	}
	public function GetUser(){
		return $this->user;
	}
	public function GetTeam(){
		return $this->team;
	}
	public function GetNombreCorto(){
		return $this->nombre_corto;
	}
	public function GetFechaCreacion(){
		return $this->fecha_creacion;
	}
	public function GetDireccion(){
		return $this->direccion;
	}
	public function GetCorreo(){
		return $this->correo;
	}
	public function GetSitioWeb(){
		return $this->sitio_web;
	}
	public function GetPassword(){
		return $this->password;
	}




}



?>


