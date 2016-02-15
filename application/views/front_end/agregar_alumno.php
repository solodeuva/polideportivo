<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Datos del alumno</h1>
	<?= form_open('Alumnos/agregarAlumno')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td>Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><input name="nombres" maxlength="30" required/></td>
					<td><input name="apellidos" maxlength="30" required/></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><input name="estatura" maxlength="4" size="3" />m.</td>
					<td><input name="peso" maxlength="3" size="2"/>lbs.</td>
				</tr>
				<tr>
					<td style="vertical-align:top">Ingrese estatura en metros (solo numeros).</td>
					<td style="vertical-align:top">Ingrese peso en libras (solo numeros).</td>
				</tr>
				<tr>
					<td>&nbsp;</td><!-- Esto es para dejar un espacio entre filas-->
					<td></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td>Genero:</td>
				</tr>
				<tr>
					<td><input name="fnacimiento" maxlength="10" size="10" required/></td>				
					<td>
					<select name="genero">
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top">Utilice el formato: 17/02/2016</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Dirección de Residencia:</td>
					<td>Telefono:</td>
				</tr>
				<tr>
					<td><input name="dir" maxlength="100"/></td>
					<td><input name="tel" maxlength="9" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 2222-2222</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Experiencia previa:</td>
					<td>Nivel:</td>
				</tr>
				<tr>
					<td><textarea name="exp" cols="40" rows="10" maxlength="250"></textarea></td>
					<td style="vertical-align:top">
						<select name="nivel">
						<?php foreach ($nivel as $n) { ?>
							<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
						<?php } ?>
					</select>
					</td>
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
					<td><input name="duim" maxlength="10" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 22222222-2</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno de la madre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjm')?></td>
					<td><input name="telm" maxlength="9" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 2222-2222</td>
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
					<td><input name="duip" maxlength="10" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 22222222-2</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno del padre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjp')?></td>
					<td><input name="telp" maxlength="9" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 2222-2222</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">En caso de no contar con padres, registrar un responsable:</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Nombre del responsable:</td>
					<td>DUI del responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('resp')?></td>
					<td><input name="duir" maxlength="10" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 22222222-2</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefono del Responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjr')?></td>
					<td><input name="telr" maxlength="9" size="7"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top">Utilice el formato: 2222-2222</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
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
		</table><br><br>
	<?= form_close()?>
<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>