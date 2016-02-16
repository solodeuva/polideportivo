<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h2>Buscar Alumnos</h2>
	<div style="text-align:center">
	<center>
		<table>
		<thead>
			<tr>
				<th colspan="2">Buscar Alumnos por nivel: </th>
			</tr>
		</thead>
			<tr>
				<?= form_open('alumnos/buscarPorNivel')?>
				<td>
					<select name="nivel">
							<?php foreach ($nivel as $n) { ?>
								<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
							<?php } ?>
					</select>
				</td>
				<td><?= form_submit('','Buscar')?></td>			
				<?= form_close()?>
			</tr>
		</table><br>
		<table>
		<thead>
			<tr>
				<th colspan="2">Buscar Alumnos por Género: </th>
			</tr>
		</thead>
			<tr>
				<?= form_open('alumnos/buscarPorGenero')?>
				<td>
					<select name="genero">
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
				</td>
				<td><?= form_submit('','Buscar')?></td>			
				<?= form_close()?>
			</tr>
		</table><br>
		<table>
		<thead>
			<tr>
				<th colspan="2">Buscar Alumnos por Nombres: </th>
			</tr>
		</thead>
			<tr>
				<?= form_open('alumnos/buscarPorNombres')?>
				<td>
					<input name="nombres" required/>
				</td>
				<td><?= form_submit('','Buscar')?></td>			
				<?= form_close()?>
			</tr>
		</table><br>
		<table>
		<thead>
			<tr>
				<th colspan="2">Buscar Alumnos por Apellidos: </th>
			</tr>
		</thead>
			<tr>
				<?= form_open('alumnos/buscarPorApellidos')?>
				<td>
					<input name="apellidos" required/>
				</td>
				<td><?= form_submit('','Buscar')?></td>			
				<?= form_close()?>
			</tr>
		</table><br>
		<table>
		<thead>
			<tr>
				<th colspan="2">Mostrar Todos los Alumnos:</th>
			</tr>
		</thead>
			<tr>
				<form action="<?php echo base_url('alumnos/buscarTodos');?>" method="post" accept-charset="utf-8">
				<td><input type="submit" value="Buscar"  /></td>			
				</form>
			</tr>
		</table>
	</center>
	</div><br><br>


<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>