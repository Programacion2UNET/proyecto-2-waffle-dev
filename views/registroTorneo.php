<?php

require_once('../php/obtenerTorneos.php');
$idTorneo = 1;

$idEquipo = $_GET['id'];

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
<body id="registroTorneoPage">
	
	<div class="registroTorneo">
			
		<h1 class="registroTorneo__titulo">Registros</h1>

		<main class="registroTorneoMain">
			<form action="../php/guardarRegistro.php" method="POST" class="registroTorneoMain__form">
				<div class="registroTorneoMain__form__item">
					<label for="torneo">Seleccione un Torneo</label>
					<select name="nombreTorneo">
					
						<?php

							for($i = 0; $i<count($torneos); $i++){
								?>
								  <option value='<?php  echo $i+1; ?>'><?php echo $torneos[$i]->GetNombre(); ?></option>
								<?php

							}
						?>
					</select>
				</div>
				<div class="registroTorneoMain__form__item">
					<label for="cant_participantes">Cantidad de Participantes</label>
					<input type="number" id="cantParticipantes" placeholder="Cantidad de Participantes" min="5" name="cantParticipantes">
				</div>
				<div class="registroTorneoMain__form__item">

					<label for="categoria">Categoria</label>

					<div class="categoria">
					  <input type="radio" name="categoria" value="principiante" checked> Principiante<br>
					  <input type="radio" name="categoria" value="aficionado"> Aficionado<br>
					  <input type="radio" name="categoria" value="profesional"> Profesional
					</div>

				</div>
				 
				 <input type="hidden" name="id_equipo" value="<?php echo $idEquipo?>">

				 <button class="form__btn" type="submit" id="submit">Registrar</button>
			</form>
		</main>

		<div class="registroTorneo__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>