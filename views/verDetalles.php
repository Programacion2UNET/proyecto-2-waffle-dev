<?php
require_once('../php/obtenerRegistros.php');
require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');
$idRegistro = $_POST['id-for'];
//echo $idRegistro;
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
<body id="verDetallesPage">
	
	<div class="verDetalles">
			
		<h1 class="verDetalles__titulo">Registro del Equipo</h1>

		<main class="verDetalles__main">
			<label for="">
				Torneo: 
				<?php
			  		for($j = 0; $j < count($torneos); $j++){
			  			if($registros[$idRegistro]->GetIdTorneo() == $torneos[$j]->GetId()){
			  				echo $torneos[$j]->GetNombre();
			  				}
			  			}
			  		?>
			</label>
			<label for="">
				Categoria:
				<?php
			  		for($j = 0; $j < count($torneos); $j++){
			  			if($registros[$idRegistro]->GetIdTorneo() == $torneos[$j]->GetId()){
			  				if($registros[$idRegistro]->GetCategoria() == 1)
				  				echo 'Principiante';
				  			else if($registros[$idRegistro]->GetCategoria() == 2)
				  				echo 'Aficionado';
				  			else 
				  				echo 'Profesional';
			  				}
			  			}
			  		?>
			</label>
			<label for="">
				Equipo:
					<?php
			  			for($j = 0; $j < count($equipos); $j++){
			  				if($registros[$idRegistro]->GetIdEquipo() == $equipos[$j]->GetId()){
			  					echo $equipos[$j]->GetTeam();
			  				}
			  			}
			  		?>
			</label>
			<label for="">
				Cantidad de Participantes:
				<?php
			  		for($j = 0; $j < count($torneos); $j++){
			  			if($registros[$idRegistro]->GetIdTorneo() == $torneos[$j]->GetId()){
			  				echo $registros[$idRegistro]->GetCantParticipantes();
			  				}
			  			}
			  	?>
			</label>
			<div class="verDetalles__main__enlaces">
				 <form action="editarRegistro.php" method="POST">
			        <input class="id-for" type="hidden" name="id-for" id="id-for" value=<?= $idRegistro; ?> /> 
			        <button type="submit" class="button-panel">Editar</button>
			      </form>
			      <form action="../php/borrarRegistro.php" method="POST">
			        <input class="id-for" type="hidden" name="id-for" id="id-for" value=<?= $registros[$idRegistro]->GetId(); ?> /> 
			        <button type="submit" class="button-panel">Borrar</button>
			      </form>
			</div>

			<div class="enlaces enlacesEditar">
                <a href="adminPanel.php" class="form__btn">Regresar</a>
              </div>

		</main>

		<div class="verDetalles__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>