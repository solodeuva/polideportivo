<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<?php if($_SESSION['user_id'] == 1):?>
		<h1>Ver niveles</h1>
		<div class="div-usuarios">
			<table class="tabla-usuarios">
				<thead align="left">
		           <tr>
		             <th >Nombre</th>
		             <th >Instructor</th>
		             <th width="10%"></th>
		           </tr>
	        </thead>
				<tbody>
				<?php foreach($nivel as $n) { ?>
					<tr>
						<td><?php echo $n->getNombre(); ?></td>
						<td><?php echo $n->getInstructor(); ?></td>
						<td><a href="<?php echo base_url('Niveles/editarNivel/'.$n->getIdNivel()); ?>"><img src="<?php echo base_url(); ?>assets/img/edit.png" width="24" height="24" border="0"></a>
						    <a onclick="eliminarNivel(<?php echo $n->getIdNivel(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/delete.png" width="24" height="24" border="0"></a>
						</td>

					</tr>
				<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div><br>
		<form>
				<input type="button" value="Regresar" name="volver atrás2" onclick="history.back()" />
		</form>
		<br>
	<?php else: ?>
		<br><br><br><br><br><br><br>
			<h2>No tienes los permisos suficientes para ver este contenido.</h2>
		<br><br><br><br><br><br><br>
	<?php endif; ?>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>