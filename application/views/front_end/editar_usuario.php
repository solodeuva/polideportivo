<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
		<br>
		<center><h1>Editar usuarios</h1></center>
		<br>
		<?= form_open('usuarios/actualizarUsuario')?>
			<table class="tabla">
				<tbody>
					<tr>
						<td width="30%" align="center">Nombres del usuario:</td>
						<td><input name="nombres" maxlength="25" value="<?php echo $usuario->getNombres();?>" /></td>
						<td><p class="tips">&nbsp;<p></td>
					</tr>
					<tr>
						<td align="center">Apellidos del usuario:</td>
						<td><input name="apellidos" maxlength="25" value="<?php echo $usuario->getApellidos();?>" /></td>
					</tr>
					<tr>
						<td align="center">Nombre para inicio de sesión:</td>
						<td><input name="nick" maxlength="25" value="<?php echo $usuario->getNick();?>" /></td>
						<td><p class="tips">*Este nombre es la credencial para el inicio de sesión.<p></td>
					</tr>
					<tr>
						<td align="center">Contraseña:</td>
						<td><input type="password" name="contrasena" value="" placeholder="********"  /></td>
						<td><p class="tips">*Dejar este campo vacío si no desea alterar la contraseña.<p></td>
					</tr>
					<tr>
						<td align="center">
							<input type="hidden" name="anteriorcontrasena" value="<?php echo $usuario->getContrasena(); ?>"  />
							<input type="hidden" name="id" value="<?php echo $usuario->getIdUsuario(); ?>"  />
							<input type="button" value="Regresar" name="volver atrás2" onclick="history.back()" />
						</td>
						<td><center><?= form_submit('','Actualizar')?></center></td>
						<td><p class="tips">&nbsp;<p></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		<?= form_close()?>
		<br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>