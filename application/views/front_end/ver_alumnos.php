
<?php function calcular_edad($fecha){
		$dias = explode('/', $fecha, 3);
		$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
		$edad = (int)((time()-$dias)/31556926 );
		return $edad;						
}
?>

<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Resultados de Busqueda</h1>
	<div class="div-usuarios">
	<center>
	<div class="div-alumnos">
	<br><p style="text-align:center">Haga click directamente sobre el estado de un alumno para modificar el mismo.</p>
		<table border="1" style="border-collapse: collapse;">
				<tr>
					<th>Estado</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td><img src="<?php echo base_url(); ?>assets/img/activo.png" width="24" height="24" border="0"></td>
					<td>Alumno Activo</td>
				</tr>
				<tr>
					<td><img src="<?php echo base_url(); ?>assets/img/inactivo.png" width="24" height="24" border="0"></td>
					<td>Alumno Inactivo</td>
				</tr>
			</table><br>
	</div>
		<div>
			<table class="tabla-usuarios">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>Nivel</th>
						<th>Estado</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if ( $alumnos != NULL): #si alumnos no esta vacio muestra los resultados?> 
					<?php foreach ($alumnos as $a) {?>
						<tr>
							<td><?= $a->getNombres();?></td>
							<td><?= $a->getApellidos();?></td>
							<td><?php echo calcular_edad($a->getFechaNacimiento());?></td>
							<td><?= $a->getIdNivel()->getNombre();?></td>
							<?php if($a->getEstado()=="A"):?>
							<td><a onclick="actualizarEstado(<?php echo $a->getIdAlumno(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/activo.png" width="24" height="24" border="0"></a></td>
							<?php else: ?>
							<td><a onclick="actualizarEstado(<?php echo $a->getIdAlumno(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/inactivo.png" width="24" height="24" border="0"></a></td>
							<?php endif;?>
							<td>
								<a href="<?php echo base_url('alumnos/verAlumno/'.$a->getIdAlumno()); ?>"><img src="<?php echo base_url(); ?>assets/img/perfil.png" width="24" height="24" border="0"></a>
								<a href="<?php echo base_url('alumnos/editarAlumno/'.$a->getIdAlumno()); ?>"><img src="<?php echo base_url(); ?>assets/img/edit.png" width="24" height="24" border="0"></a>
								<a onclick="eliminarAlumno(<?php echo $a->getIdAlumno(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/delete.png" width="24" height="24" border="0"></a>	
							</td>
						</tr>
					<?php } ?>
					<?php else: #si esta vacio no se encontraron resultados, imprime mensaje?>
						<tr>
							<td colspan="5">No se encontraron resultados en su búsqueda</td>
						</tr>
					<?php endif;?>
				</tbody>
			</table>
			</div>
		</div>
	</center>
	</div>
	<br><br>

	<form>
			<input type="button" value="Regresar" name="volver atrás2" onclick="history.back()" />
	</form>
	<br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>