<?php

class Registro 
{

	private $id;
	private $idEquipo;
	private $idTorneo;
	private $categoria;
	private $cantParticipantes;

	function __construct($id, $idTorneo, $idEquipo, $categoria, $cantParticipantes)
	{
		$this->id = $id;
		$this->idTorneo= $idTorneo;
		$this->idEquipo = $idEquipo;
		$this->categoria = $categoria;
		$this->cantParticipantes = $cantParticipantes;
	}

	public function GetId(){
		return $this->id;
	}
	public function GetIdTorneo(){
		return $this->idTorneo;
	}
	public function GetIdEquipo(){
		return $this->idEquipo;
	}
	public function GetCategoria(){
		return $this->categoria;
	}
	public function GetCantParticipantes(){
		return $this->cantParticipantes;
	}

}


?>