<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<?php if($_SESSION['user_id'] == 1):?>
		<table width="100%" border="1">
			<tr>
				<td><a style="color:black;" href="<?php echo base_url('Usuarios/nuevoUsuario'); ?>"><img src="<?php echo base_url(); ?>assets/img/usuarios.png" width="200" height="200"/><br>
					<h2>Crear Usuario</h2>
				</a></td>
				<td><a style="color:black;" href="<?php echo base_url('Usuarios/verUsuarios'); ?>"><img src="<?php echo base_url(); ?>assets/img/edit-user.png" width="200" height="200"/><br>
					<h2>Ver Usuarios</h2>
				</a></td>
			</tr>
		</table>
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