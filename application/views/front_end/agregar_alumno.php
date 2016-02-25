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
					<td><input name="estatura" maxlength="4" size="3" />m. (ingrese solo números)</td>
					<td><input name="peso" maxlength="3" size="2"/>lbs. (ingrese solo números)</td>
				</tr>
				<tr>
					<td style="vertical-align:top">Ingrese estatura en metros (solo números).</td>
					<td style="vertical-align:top">Ingrese peso en libras (solo números).</td>
				</tr>
				<tr>
					<td>&nbsp;</td><!-- Esto es para dejar un espacio entre filas-->
					<td></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td>Género:</td>
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
					<td>Teléfono:</td>
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
					<td><input name="madre" maxlength="60"/></td>
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
					<td>Teléfono de la madre:</td>
				</tr>
				<tr>
					<td><input name="tbjm" maxlength="30"/></td>
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
					<td><input name="padre" maxlength="60"/></td>
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
					<td>Teléfono del padre:</td>
				</tr>
				<tr>
					<td><input name="tbjp" maxlength="30"/></td>
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
					<td colspan="2">En caso de no contar con padres, registrar datos de un responsable:</td>
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
					<td><input name="resp" maxlength="60"/></td>
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
					<td>Teléfono del Responsable:</td>
				</tr>
				<tr>
					<td><input name="tbjr" maxlength="30"/></td>
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
					<td><textarea name="padecimiento" cols="40" rows="10" maxlength="200"></textarea></td>
					<td><textarea name="medic" cols="40" rows="10" maxlength="200"></textarea></td>
				</tr>
				<!--<tr>
				</tr>-->
			</tbody>
		</table><br><br>
	<?= form_submit('','Ingresar Alumno')?>
	<?= form_close()?>
	<br>
	<form action="<?php echo base_url('alumnos/gestionarAlumnos');?>">
		<input type="submit" value="Regresar"/>
	</form><br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>