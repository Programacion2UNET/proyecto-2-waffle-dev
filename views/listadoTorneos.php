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

<?php
require_once('cabecera.php');
?>
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
			  					<?php 
			  						if($registros[$i]->GetCategoria() == 1)
			  							echo 'Principiante';
			  						else if($registros[$i]->GetCategoria() == 2)
			  							echo 'Aficionado';
			  						else 
			  							echo 'Profesional';
			  					?>
			  				</td>
			  			</tr>

			  			<?php
			  		}
			  	}
			  ?>
			</table>
			<div class="enlaces">
				<a href="registroTorneo.php" class="form__btn">Registrar equipo en otro Torneo</a>
				<a href="../index.html" class="form__btn">Salir</a>
			</div>
		</main>

		<div class="listadoTorneos__footer">
			© WaffleDev
		</div>

	</div>

	
</body>
</html>