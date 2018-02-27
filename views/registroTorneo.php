<?php

require_once('../php/obtenerTorneos.php');
$idTorneo = 1;


session_start();

if(isset($_GET['id']))
	$idEquipo = $_GET['id'];
else
	$idEquipo = $_SESSION['idEquipo'];

?>

<?php
require_once('cabecera.php');
?>
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

					<label for="categoria" class="categoriaLabel">Categoria</label>

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