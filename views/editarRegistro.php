<?php
require_once('../php/obtenerRegistros.php');
require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');
$idRegistro = $_POST['id-for'];
?>

<?php
require_once('cabecera.php');
$fecha = date("Y/m/d");
?>
<body id="editarRegistroPage">
	
	<div class="registroTorneo">
			
	<h1 class="editarRegistro__titulo">Editar registro #<?= $_POST['id-for']+1?></h1>
		<main class="registroTorneoMain">
	
			<form action="../php/editarRegistro.php" method="POST" class="editarRegistro__main__form">
				<div class="registroTorneoMain__form__item">
					<label for="torneo">Seleccione un Torneo</label>
					<select name="nombreTorneo">
					
						<?php

							for($i = 0; $i<count($torneos); $i++){
								?>

								<?php
									if($torneos[$i]->GetId() === $registros[$idRegistro]->GetIdTorneo()){

										if(strtotime($fecha) < strtotime($torneos[$i]->GetFecha()))
										{?>
		

										 <option value='<?php  echo $i+1; ?>' selected="selected"><?php echo $torneos[$i]->GetNombre(); ?></option>

										<?php
										}
									}else{
										if(strtotime($fecha) < strtotime($torneos[$i]->GetFecha()))
										{?>
		

										 <option value='<?php  echo $i+1; ?>'><?php echo $torneos[$i]->GetNombre(); ?></option>

										<?php
										}
									}
								?>
								 
								<?php

							}
						?>
					</select>
				</div>
				<div class="registroTorneoMain__form__item">
					<label for="cant_participantes">Cantidad de Participantes</label>
					<input type="number" id="cantParticipantes"  class="cantParticipantes" placeholder="Cantidad de Participantes" value="<?php echo $registros[$idRegistro]->GetCantParticipantes()?>" min="5" max="10" name="cantParticipantes" >
				</div>
				<div class="registroTorneoMain__form__item"">

					<label for="categoria" class="categoriaLabel">Categoria</label>

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
				 
				 <input type="hidden" name="idRegistro" value="<?php echo $registros[$idRegistro]->GetId()?>">
				  <input type="hidden" name="idR" value="<?php echo $idRegistro?>">

				 <div class="modificarBtn">
				 	<button class="form__btn " type="submit" id="submit">Modificar</button>
				 </div>
			</form>
			<div class="enlaces enlacesEditar">
                <a href="adminPanel.php" class="form__btn">Regresar</a>
              </div>

		</main>

		<div class="editarRegistro__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>