<section class="contenido">
	<h1>Datos del alumno</h1>
	<?= form_open()?>
		<table class="tabla">
			<tbody>
				<tr>
					<td style="{font-color:red;}">Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td>Juan Antonio</td>
					<td>Pérez Reyes</td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td>Nivel:</td>
				</tr>
				<tr>
					<td>21/04/1998</td>					
					<td>Nivel 2</select></td>
				</tr>
				<tr>
					<td>Dirección de Residencia:</td>
					<td><?= form_input('dir')?></td>
				</tr>
				<tr>
					<td>Telefono:</td>
					<td><?= form_input('tel')?></td>
				</tr>
				<tr>
					<td>Nombre de la Madre:</td>
					<td><?= form_input('madre')?></td>
				</tr>
				<tr>
					<td>DUI de la madre:</td>
					<td><?= form_input('duim')?></td>
				</tr>
				<tr>
					<td>Profesión de la madre:</td>
					<td><?= form_input('profm')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td><?= form_input('tbjm')?></td>
				</tr>
				<tr>
					<td>Telefóno de la madre:</td>
					<td><?= form_input('telm')?></td>
				</tr>
				<tr>
					<td>Nombre del Padre:</td>
					<td><?= form_input('padre')?></td>
				</tr>
				<tr>
					<td>Documento Unico de identidad del padre:</td>
					<td><?= form_input('duip')?></td>
				</tr>
				<tr>
					<td>Profesión del padre:</td>
					<td><?= form_input('profp')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td><?= form_input('tbjp')?></td>
				</tr>
				<tr>
					<td>Telefóno del padre:</td>
					<td><?= form_input('telp')?></td>
				</tr>
				<tr>
					<h3>En caso de no contar con los padres:</h3>
				</tr>
				<tr>
					<td>Responsable:</td>
					<td><?= form_input('resp')?></td>
				</tr>
				<tr>
					<td>Documento Unico de Identidad del responsable:</td>
					<td><?= form_input('duir')?></td>
				</tr>
				<tr>
					<td>Telefono del Responsable:</td>
					<td><?= form_input('telr')?></td>
				</tr>
				<tr>
					<td>Padecimientos del inscrito:</td>
					<td><?= form_textarea('padecimiento')?></td>
				</tr>
				<tr>
					<td>Medicinas:</td>
					<td><?= form_textarea('medic')?></td>
				</tr>
			</tbody>
		</table>
	<?= form_close()?>
</section>