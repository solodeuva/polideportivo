<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Editar usuarios</h1>
	<?= form_open('usuarios/actualizarUsuario')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td width="30%">Nombres del usuario:</td>
					<td><?= form_input('nombres',$usuario->getNombres())?></td>
					<td><p class="tips">&nbsp;<p></td>
				</tr>
				<tr>
					<td>Apellidos del usuario:</td>
					<td><?= form_input('apellidos',$usuario->getApellidos())?></td>
				</tr>
				<tr>
					<td>Nick o nombre para inicio de sesión:</td>
					<td><?= form_input('nick',$usuario->getNick())?></td>
					<td><p class="tips">*Este nombre es la credencial para el inicio de sesión.<p></td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td><input type="password" name="contrasena" value="" placeholder="********"  /></td>
					<td><p class="tips">*Dejar este campo vacío si no desea alterar la contraseña.<p></td>
				</tr>
				<tr>
					<td><input type="hidden" name="anteriorcontrasena" value="<?php echo $usuario->getContrasena(); ?>"  />
					<input type="hidden" name="id" value="<?php echo $usuario->getIdUsuario(); ?>"  />
					</td>
					<td><center><?= form_submit('','Actualizar Usuario')?></center></td>
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
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>