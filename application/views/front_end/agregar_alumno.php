<section class="contenido">
	<h1>Datos del alumno</h1>
	<?= form_open()?>
		<table class="tabla">
			<tbody>
				<tr>
					<td>Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><?= form_input('apellido')?></td>
					<td><?= form_input('nombre')?></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td>Nivel:</td>
				</tr>
				<tr>
					<td><?= form_input('fnacimiento')?></td>					
					<td><select name="nivel" id=""></select></td>
				</tr>
				<tr>
					<td>Dirección de Residencia:</td>
					<td>Telefono:</td>
				</tr>
				<tr>
					<td><?= form_input('dir')?></td>
					<td><?= form_input('tel')?></td>
				</tr>
				<tr>
					<td>Nombre de la Madre:</td>
					<td>Documento Unico de identidad de la madre:</td>
				</tr>
				<tr>
					<td><?= form_input('madre')?></td>
					<td><?= form_input('duim')?></td>
				</tr>
				<tr>
					<td>Profesión de la madre:</td>
					<td>Lugar de trabajo:</td>
				</tr>
				<tr>
					<td><?= form_input('profm')?></td>
					<td><?= form_input('tbjm')?></td>
				</tr>
				<tr>
					<td>Telefóno de la madre:</td>
					<td>Nombre del Padre:</td>
				</tr>
				<tr>
					<td><?= form_input('telm')?></td>
					<td><?= form_input('padre')?></td>
				</tr>
				<tr>
					<td>Documento Unico de identidad del padre:</td>
					<td>Profesión del padre:</td>
				</tr>
				<tr>
					<td><?= form_input('duip')?></td>
					<td><?= form_input('profp')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno del padre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjp')?></td>
					<td><?= form_input('telp')?></td>
				</tr>
				<tr>
					<h3>En caso de no contar con los padres:</h3>
				</tr>
				<tr>
					<td>Responsable:</td>
					<td>Documento Unico de Identidad del responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('resp')?></td>
					<td><?= form_input('duir')?></td>
				</tr>
				<tr>
					<td>Telefono del Responsable:</td>
					<td>Padecimientos del inscrito:</td>
				</tr>
				<tr>
					<td><?= form_input('telr')?></td>
					<td><?= form_textarea('padecimiento')?></td>
				</tr>
				<tr>
					<td>Medicinas:</td>
				</tr>
				<tr>
					<td><?= form_textarea('medic')?></td>
				</tr>
			</tbody>
		</table>
	<?= form_close()?>
</section>