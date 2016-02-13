<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Datos del alumno</h1>
	<?= form_open('Alumnos/agregarAlumno')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td style="{font-color:red;}">Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><?= form_input('apellido')?></td>
					<td><?= form_input('nombre')?></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><?= form_input('estatura')?></td>
					<td><?= form_input('peso')?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td>Genero: Nivel:</td>
				</tr>
				<tr>
					<td><?= form_input('fnacimiento')?></td>				
					<td>
					<select name="genero" id="">
						<option value="m">Masculino</option>
						<option value="f">Femenino</option>
					</select>
					<select name="nivel" id="">
					<?php foreach ($nivel as $n) { ?>
						<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
					<?php } ?>
					</select>
					</td>
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
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Nombre de la Madre:</td>
					<td>DUI de la madre:</td>
				</tr>
				<tr>
					<td><?= form_input('madre')?></td>
					<td><?= form_input('duim')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno de la madre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjm')?></td>
					<td><?= form_input('telm')?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Nombre del Padre:</td>
					<td>DUI del padre:</td>
				</tr>
				<tr>
					<td><?= form_input('padre')?></td>
					<td><?= form_input('duip')?></td>
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
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Experiencia previa:</td>
				</tr>
				<tr>
					<td><?= form_textarea('exp')?></td>
				</tr>
				<tr>
					<td colspan="2">En caso de no contar con los padres mencionar un responsable:</td>
				</tr>
				<tr>
					<td>Nombre del responsable:</td>
					<td>DUI del responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('resp')?></td>
					<td><?= form_input('duir')?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefono del Responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjr')?></td>
					<td><?= form_input('telr')?></td>
				</tr>
				<tr>
					<td>Padecimientos del inscrito:</td>
					<td>Medicinas:</td>
				</tr>
				<tr>
					<td><?= form_textarea('padecimiento')?></td>
					<td><?= form_textarea('medic')?></td>
				</tr>
				<tr>
					<td><input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" /></td>
					<td><center><?= form_submit('','Ingresar Alumno')?></center></td>
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