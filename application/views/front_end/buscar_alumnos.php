<?php function calcular_edad($fecha){
		$dias = explode('/', $fecha, 3);
		$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
		$edad = (int)((time()-$dias)/31556926 );
		return $edad;						
}
?>
<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h2>Buscar Alumnos</h2>
	<div style="text-align:center">
	
	<p><center>!A Considerar¡<br>Esta Busqueda es Sensible a Mayúsculas, Minúsculas y Tíldes.</center></p>
	<center>
		<table>
		<thead>
			<tr>
				<th colspan="2">Buscar Alumnos por nivel: </th>
				<th colspan="2">Buscar Alumnos por Género: </th>
				<th colspan="2">Buscar Alumnos por Nombres: </th>
				<th colspan="2">Buscar Alumnos por Apellidos: </th>
				<th colspan="2">Mostrar Todos los Alumnos:</th>
			</tr>
		</thead>
			<tr>
				<form action="<?php echo base_url('alumnos/buscarPorNivel');?>" method="post" accept-charset="utf-8">
				<td>
					<select name="nivel">
							<?php foreach ($nivel as $n) { ?>
								<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
							<?php } ?>
					</select>
				</td>
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarPorGenero');?>" method="post" accept-charset="utf-8">
				<td>
					<select name="genero">
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
				</td>
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarPorNombres');?>" method="post" accept-charset="utf-8">
				<td>
					<input name="nombres" required/>
				</td>
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarPorApellidos');?>" method="post" accept-charset="utf-8">
				<td>
					<input name="apellidos" required/>
				</td>
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarTodos');?>" method="post" accept-charset="utf-8">
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
			</tr>
		<br>
		</table>
		<br>
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
		<div class="div-usuarios">
			<table class="tabla-alumnos">
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
								<a href="<?php echo base_url('Alumnos/verAlumno/'.$a->getIdAlumno()); ?>">Ficha</a>
								<a href="<?php echo base_url('Alumnos/editarAlumno/'.$a->getIdAlumno()); ?>"><img src="<?php echo base_url(); ?>assets/img/edit.png" width="24" height="24" border="0"></a>
								<a onclick="eliminarAlumno(<?php echo $a->getIdAlumno(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/delete.png" width="24" height="24" border="0"></a>	
							</td>
						</tr>
					<?php } ?>
					<?php else: #si esta vacio no se encontraron resultados, imprime mensaje?>
						<tr>
							<td colspan="5">No se encontraron resultados en su busqueda</td>
						</tr>
					<?php endif;?>
				</tbody>
			</table>
		</div>
	</center>
	</div>
	<br><br>


<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>