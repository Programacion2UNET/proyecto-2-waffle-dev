<?php
require_once('../php/obtenerRegistros.php');
require_once('../php/obtenerEquipos.php');
require_once('../php/obtenerTorneos.php');
?>

<?php
require_once('cabecera.php');
?>
<body id="adminPanelPage">
	
	<div class="adminPanel">
			
		<h1 class="adminPanel__titulo">Admin Panel</h1>
		<h3>Equipos registrados</h3>
		<main class="adminPanel__main">
			<table style="width:100%" class="adminPanel__main__table">
			  <tr>
			    <th>Torneo</th>
			    <th>Categoria</th> 
			    <th>Equipo</th>
			    <th>Cantidad de Participantes</th>
			  </tr>
			  <?php
			  	for($i=0; $i < count($registros); $i++){
			  		?>
			  		
			  		<tr>
			  			<td>
			  				<?php
			  					for($j = 0; $j < count($torneos); $j++){
			  						if($registros[$i]->GetIdTorneo() == $torneos[$j]->GetId()){
			  							echo $torneos[$j]->GetNombre();
			  						}
			  					}
			  				?>
			  			</td>
			  			<td>
			  				<?php
			  					for($j = 0; $j < count($torneos); $j++){
			  						if($registros[$i]->GetIdTorneo() == $torneos[$j]->GetId()){
			  							if($registros[$i]->GetCategoria() == 1)
				  							echo 'Principiante';
				  						else if($registros[$i]->GetCategoria() == 2)
				  							echo 'Aficionado';
				  						else 
				  							echo 'Profesional';
			  						}
			  					}
			  				?>
			  			</td>
			  			<td>
			  				<?php
			  					for($j = 0; $j < count($equipos); $j++){
			  						if($registros[$i]->GetIdEquipo() == $equipos[$j]->GetId()){
			  							echo $equipos[$j]->GetTeam();
			  						}
			  					}
			  				?>
			  			</td>
			  			<td>
			  				<?php
			  					for($j = 0; $j < count($torneos); $j++){
			  						if($registros[$i]->GetIdTorneo() == $torneos[$j]->GetId()){
			  							echo $registros[$i]->GetCantParticipantes();
			  						}
			  					}
			  				?>
			  			</td>
			  			<td>
			  			  <form action="verDetalles.php" method="POST">
		                     <input class="id-for " type="hidden" name="id-for" id="id-for" value=<?php echo $i ?> /> 
		                     <button type="submit"  class="button-panel"> Ver detalles</button>
		                  </form>
			  			</td>
			  			<td>
			  				<form action="editarRegistro.php" method="POST">
					        	<input class="id-for" type="hidden" name="id-for" id="id-for" value=<?= $i	; ?> /> 
					        	<button type="submit" class="button-panel">Editar</button>
					      </form>
			  			</td>
			  			<td>
			  			  <form action="../php/borrarRegistro.php" method="POST">
					       	<input class="id-for" type="hidden" name="id-for" id="id-for" value=<?= $registros[$i]->GetId(); ?> /> 
					       	<button type="submit" class="button-panel">Borrar</button>
					      </form>
			  			</td>
			  		</tr>

			  		<?php
			  	}
			  ?>
			</table>


			<div class="enlaces">
				<a href="verTorneos.php" class="button-panel">Ver Torneos</a>
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