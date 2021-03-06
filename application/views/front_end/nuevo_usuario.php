<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<?php if($_SESSION['user_id'] == 1):?>
		<h2>Crear un nuevo Usuario</h2>
		<?= form_open('usuarios/agregarUsuario')?>
			<table class="tabla">
				<tbody>
					<tr>
						<td width="30%">Nombres del usuario:</td>
						<td><input name="nombres" maxlength="25" required/></td>
						<td><p class="tips">&nbsp;<p></td>
					</tr>
					<tr>
						<td>Apellidos del usuario:</td>
						<td><input name="apellidos" maxlength="25" required/></td>
					</tr>
					<tr>
						<td>Nombre para inicio de sesión:</td>
						<td><input name="nick" maxlength="25" required/></td>
						<td><p class="tips">*Este nombre se usará como credencial para que el usuario inicie sesión.<p></td>
					</tr>
					<tr>
						<td>Contraseña:</td>
						<td><input type="password" name="contrasena" maxlength="32" required/></td>
						<td><p class="tips">*Esta contraseña se asignara al nuevo usuario.<p></td>
					</tr>
					<tr>
						<td><input type="button" value="Regresar" name="Regresar" onclick="history.back()" /></td>
						<td><center><?= form_submit('','Registrar Usuario')?></center></td>
						<td><p class="tips">&nbsp;<p></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		<?= form_close()?>
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