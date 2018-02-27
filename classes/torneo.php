<?php

class Torneo 
{

	private $id;
	private $nombre;
	private $fecha;

	function __construct($id, $nombre, $fecha)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->fecha = $fecha;
	}

	public function GetNombre(){
		return $this->nombre;
	}
	public function GetFecha(){
		return $this->fecha;
	}
	public function GetId(){
		return $this->id;
	}

}


?>