<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h2>Buscar Alumnos</h2>
	<div style="text-align:center">
	
	<p><center>!A considerar¡<br>Esta búsqueda diferencia palabras con tildes de palabras sin tildes por lo que Hernandez y Hernández son 2 busquedas diferentes.</center></p>
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
				<td><input type="submit" name="buscar" value="Buscar"  /></td>			
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
				<td><input type="submit" name="buscar" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarPorApellidos');?>" method="post" accept-charset="utf-8">
				<td>
					<input name="apellidos" required/>
				</td>
				<td><input type="submit" name="buscar" value="Buscar"  /></td>			
				</form>
				<form action="<?php echo base_url('alumnos/buscarTodos');?>" method="post" accept-charset="utf-8">
				<td><input type="submit" name="buscar" value="Buscar"  /></td>			
				</form>
			</tr>
		<br>
		</table>
		<br><br>
		<br><br>
		<br><br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>