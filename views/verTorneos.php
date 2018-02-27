<?php
require_once('../php/obtenerTorneos.php');
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
<body id="verTorneosPage">
	
	<div class="adminPanel">
			
		<h1 class="adminPanel__titulo">Admin Panel</h1>
		<h3>Torneos registrados</h3>
		<main class="adminPanel__main">
			<table style="width:100%" class="adminPanel__main__table">
			  <tr>
			    <th>Torneo</th>
			    <th>Fecha</th> 
			  </tr>
			  <?php
			  	for($i=0; $i < count($torneos); $i++){
			  		?>
			  		
			  		<tr>
			  			<td>
			  				<?php
			  						echo $torneos[$i]->GetNombre();
			  				?>
			  			</td>
			  			<td>
			  				<?php
			  					echo $torneos[$i]->GetFecha();
			  				
			  				?>
			  			</td>
			  		</tr>

			  		<?php
			  	}
			  ?>
			</table>


			<div class="enlaces verTorneosEnlaces">
				<a href="adminPanel.php" class="button-panel">Regresar</a>
				<a href="crearTorneo.php" class="button-panel">Crear Torneo</a>
				<a href="../index.html" class="button-panel">Salir</a>
			</div>
		</main>

		<div class="adminPanel__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>