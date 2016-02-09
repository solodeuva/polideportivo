<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h2>Crear un nuevo Nivel</h2>
	<?= form_open('niveles/agregarNivel')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td width="30%">Nombre del nivel:</td>
					<td><?= form_input('nombre')?></td>
					<td><p class="tips">*Ej. Nivel 6, Nivel 7 (no debe repetir nombres ya establecidos)<p></td>
				</tr>
				<tr>
					<td>Instructor:</td>
					<td><?= form_input('instructor')?></td>
					<td><p class="tips">*Nombre y apellido del instructor a cargo del nivel<p></td>
				</tr>
				<tr>
					<td><input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" /></td>
					<td><center><?= form_submit('','Crear Nivel')?></center></td>
					<td></td>
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