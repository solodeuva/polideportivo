<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<?php if($_SESSION['user_id'] == 1):?>
		<br>
		<center><h2>Crear un nuevo Nivel</h2></center>
		<br>
		<?= form_open('niveles/agregarNivel')?>
			<table class="tabla">
				<tbody>
					<tr>
						<td width="30%" align="center">Nombre del nivel:</td>
						<td><input name="nombre" maxlength="8" required/></td>
						<td><p class="tips">*Ej. Nivel 6, Nivel 7 (no debe repetir nombres ya establecidos)<p></td>
					</tr>
					<tr>
						<td align="center">Instructor:</td>
						<td><input name="instructor" maxlength="25" required/></td>
						<td><p class="tips">*Nombre y apellido del instructor a cargo del nivel<p></td>
					</tr>
					<tr>
						<td align="center"><input type="button" value="Regresar" name="volver atrás2" onclick="history.back()" /></td>
						<td><center><?= form_submit('','Crear Nivel')?></center></td>
						<td></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br><br>
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