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
			<form action="" method="POST" class="registroTorneoMain__form">
				<div class="registroTorneoMain__form__item">
					<label for="torneo">Seleccione un Torneo</label>
					<select>
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="mercedes">Mercedes</option>
						<option value="audi">Audi</option>
					</select>
				</div>
				<div class="registroTorneoMain__form__item">
					<label for="cant_participantes">Cantidad de Participantes</label>
					<input type="text" id="cantParticipantes" placeholder="Cantidad de Participantes">
				</div>
				<div class="registroTorneoMain__form__item">

					<label for="categoria">Categoria</label>

					<div class="categoria">
					  <input type="radio" name="categoria" value="principiante" checked> Principiante<br>
					  <input type="radio" name="categoria" value="aficionado"> Aficionado<br>
					  <input type="radio" name="categoria" value="profesional"> Profesional
					</div>

				</div>

			</form>
		</main>

		<div class="registroTorneo__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>