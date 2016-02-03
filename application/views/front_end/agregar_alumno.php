<section class="contenido">
	<?= form_open()?>
		<table>
			<tbody>
				<tr>
					<td>Nombre:</td>
					<td><?= form_input('nombre')?></td>
				</tr>
				<tr>
					<td>Apellidos:</td>
					<td><?= form_input('apellido')?></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento</td>
					<td></td>
				</tr>
				<tr>
					<td>Nivel:</td>
					<td></td>
				</tr>
				<tr>
					<td>Dirección Personal:</td>
					<td><?= form_input('dir')?></td>
				</tr>
				<tr>
					<td>Telefono:</td>
					<td><?= form_input('tel')?></td>
				</tr>
				<tr>
					<td>Padecimientos:</td>
					<td><?= form_textarea('padecimiento')?></td>
				</tr>
				<tr>
					<td>Medicinas:</td>
					<td><?= form_textarea('medic')?></td>
				</tr>
				<tr>
					<td>Madre de familia:</td>
					<td><?= form_input('madre')?></td>
				</tr>
				<tr>
					<td>Documento Unico de identidad de la madre:</td>
					<td><?= form_input('duim')?></td>
				</tr>
				<tr>
					<td>Profesión:</td>
					<td><?= form_input('profm')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td><?= form_input('tbjm')?></td>
				</tr>
				<tr>
					<td>Telefóno:</td>
					<td><?= form_input('telm')?></td>
				</tr>
				<tr>
					<td>Padre de familia:</td>
					<td><?= form_input('padre')?></td>
				</tr>
				<tr>
					<td>Documento Unico de identidad del padre:</td>
					<td><?= form_input('duip')?></td>
				</tr>
				<tr>
					<td>Profesión:</td>
					<td><?= form_input('profp')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td><?= form_input('tbjp')?></td>
				</tr>
				<tr>
					<td>Telefóno:</td>
					<td><?= form_input('telp')?></td>
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
			</tbody>
		</table>
	<?= form_close()?>
</section>