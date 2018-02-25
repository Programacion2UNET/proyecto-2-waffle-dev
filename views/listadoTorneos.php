<?php

require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');
require_once('../php/obtenerRegistros.php');

$idEquipo = $_GET['idEquipo'];
$idTorneo = $_GET['idTorneo'];

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


$_SESSION['idEquipo'] = $idEquipo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>CoD Superleague</title>
	<link rel="shortcut icon" type="image/png" href="../images/icon.png"/>
	<link rel="stylesheet" href="../css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
</head>
<body id="listadoTorneosPage">
	
	<div class="listadoTorneos">
			
		<h1 class="listadoTorneos__titulo">Listado Torneos</h1>

		<main class="listadoTorneos__main">
			<table style="width:100%" class="listadoTorneos__main__table">
			  <tr>
			    <th>Nombre</th>
			    <th>Fecha</th> 
			    <th>Cantidad de Participantes</th>
			    <th>Categoria</th>
			  </tr>
			  <?php
			  	for($i=0; $i < count($registros); $i++){
			  		if($idEquipo === $registros[$i]->GetIdEquipo()){
			  			?>

			  			<tr>
			  				<td>
			  					<?php 
			  						for($j = 0; $j < count($torneos); $j++){
			  							if($registros[$i]->GetIdTorneo() === $torneos[$j]->GetId()){
			  								echo  $torneos[$j]->GetNombre();
			  							}
			  						}
			  					?>	
			  				</td>	
			  				<td>
			  					<?php 
			  						for($j = 0; $j < count($torneos); $j++){
			  							if($registros[$i]->GetIdTorneo() === $torneos[$j]->GetId()){
			  								echo  $torneos[$j]->GetFecha();
			  							}
			  						}
			  					?>	
			  				</td>
			  				<td>
			  					<?= $registros[$i]->GetCantParticipantes()?>
			  				</td>
			  				<td>
			  					<?= $registros[$i]->GetCategoria()?>
			  				</td>
			  			</tr>

			  			<?php
			  		}
			  	}
			  ?>
			</table>
			<div class="enlaces">
				<a href="registroTorneo.php">Registrar equipo en otro Torneo</a>
				<a href="../index.html">Salir</a>
			</div>
		</main>

		<div class="listadoTorneos__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>