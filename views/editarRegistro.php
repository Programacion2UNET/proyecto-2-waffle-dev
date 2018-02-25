<?php
require_once('../php/obtenerRegistros.php');
require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');
$idRegistro = $_POST['id-for'];

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
<body id="editarRegistroPage">
	
	<div class="editarRegistro">
			
		<h1 class="editarRegistro__titulo">Editar registro #<?= $_POST['id-for']+1?></h1>

		<main class="editarRegistro__main">
	
			<form action="../php/editarRegistro.php" method="POST" class="editarRegistro__main__form">
				<div class="editarRegistro__main__form__item">
					<label for="torneo">Seleccione un Torneo</label>
					<select name="nombreTorneo">
					
						<?php

							for($i = 0; $i<count($torneos); $i++){
								?>

								<?php
									if($torneos[$i]->GetId() === $registros[$idRegistro]->GetIdTorneo()){
										?>
										 <option value='<?php  echo $i+1; ?>' selected="selected"><?php echo $torneos[$i]->GetNombre(); ?></option>
										<?php
									}else{
										?>
										 <option value='<?php  echo $i+1; ?>'><?php echo $torneos[$i]->GetNombre(); ?></option>
										<?php
									}
								?>
								 
								<?php

							}
						?>
					</select>
				</div>
				<div class="editarRegistro__main__form__item">
					<label for="cant_participantes">Cantidad de Participantes</label>
					<input type="number" id="cantParticipantes" placeholder="Cantidad de Participantes" value="<?php echo $registros[$idRegistro]->GetCantParticipantes()?>" min="5" name="cantParticipantes">
				</div>
				<div class="editarRegistro__main__form__item">

					<label for="categoria">Categoria</label>

					<div class="categoria">
					  <?php 
					  	if($registros[$idRegistro]->GetCategoria() == 1){
					  		?>
								<input type="radio" name="categoria" value="principiante" checked> Principiante<br>
					  		<?php
					  	}else{
					  		?>
								<input type="radio" name="categoria" value="principiante"> Principiante<br>
					  		<?php
					  	}
					  ?>
					  <?php 
					  	if($registros[$idRegistro]->GetCategoria() == 2){
					  		?>
							<input type="radio" name="categoria" value="aficionado" checked> Aficionado<br>
					  		<?php
					  	}else{
					  		?>
								<input type="radio" name="categoria" value="aficionado"> Aficionado<br>
					  		<?php
					  	}
					  ?>
					   <?php 
					  	if($registros[$idRegistro]->GetCategoria() == 3){
					  		?>
							 <input type="radio" name="categoria" value="profesional" checked> Profesional
					  		<?php
					  	}else{
					  		?>
								 <input type="radio" name="categoria" value="profesional"> Profesional
					  		<?php
					  	}
					  ?>
					 
					</div>

				</div>
				 
				 <input type="hidden" name="idRegistro" value="<?php echo $idRegistro?>">

				 <button class="form__btn" type="submit" id="submit">Modificar</button>
			</form>

		</main>

		<div class="editarRegistro__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>