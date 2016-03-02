<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<br>
	<h1>Datos del alumno</h1>
	<?= form_open('Alumnos/agregarAlumno')?>
	<div class="buscar-alumno">
		<table class="tabla">
			<tbody>
				<tr>
					<td>Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><input name="nombres" maxlength="30" value="<?php echo set_value('nombres'); ?>" required/></td>
					<td><input name="apellidos" maxlength="30" value="<?php echo set_value('apellidos'); ?>" required/></td>
				</tr>
				<tr>
					<td>&nbsp;</td><!-- Esto es para dejar un espacio entre filas-->
					<td></td>
				</tr>
				<tr>
					<td>Estatura: (metros)</td>
					<td>Peso: (libras)</td>
				</tr>
				<tr>
					<td><input name="estatura" maxlength="4" size="3" value="<?php echo set_value('estatura'); ?>"/>m. (ingrese solo números Ej. 1.70)</td>
					<td><input name="peso" maxlength="3" size="2" value="<?php echo set_value('peso'); ?>"/>lbs. (ingrese solo números Ej. 145)</td>
				</tr>
				<tr>
					<td><?php echo form_error('estatura'); ?></td>
					<td><?php echo form_error('peso'); ?></td>
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
					<td><input name="fnacimiento" type="date" value="<?php echo set_value('fnacimiento'); ?>" required/></td>				
					<td>
					<select name="genero">
						<option value="M" <?php echo set_select('genero','M'); ?>>Masculino</option>
						<option value="F" <?php echo set_select('genero','F'); ?>>Femenino</option>
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
					<td><input name="dir" maxlength="100" value="<?php echo set_value('dir'); ?>"/></td>
					<td><input name="tel" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('tel'); ?>"/>-<input name="tel2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('tel2'); ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align:top"><?php echo form_error('tel'); ?><?php echo form_error('tel2'); ?>Ej: 2222-2222 (Ingrese solo numeros)</td>
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
					<td><textarea name="exp" cols="35" rows="10" maxlength="250"><?php echo set_value('exp'); ?></textarea></td>
					<td style="vertical-align:top">
						<select name="nivel">
						<?php foreach ($nivel as $n) { ?>
							<option value="<?= $n->getIdNivel();?>" <?php echo set_select('nivel',$n->getIdNivel()); ?>><?php echo $n->getNombre();?></option>
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
					<td><input name="madre" maxlength="60" value="<?php echo set_value('madre'); ?>"/></td>
					<td><input name="duim" minlength="8" maxlength="8" value="<?php echo set_value('duim'); ?>" size="5"/>-<input name="duim2" maxlength="1" value="<?php echo set_value('duim2'); ?>" style="width: 13px;"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('duim'); ?><?php echo form_error('duim2'); ?></td>
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
					<td><input name="tbjm" maxlength="30" value="<?php echo set_value('tbjm'); ?>"/></td>
					<td><input name="telm" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telm'); ?>"/>-<input name="telm2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telm2'); ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('telm'); ?><?php echo form_error('telm2'); ?></td>
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
					<td><input name="padre" maxlength="60" value="<?php echo set_value('padre'); ?>"/></td>
					<td><input name="duip" minlength="8" maxlength="8" value="<?php echo set_value('duip'); ?>" size="5"/>-<input name="duip2" maxlength="1" value="<?php echo set_value('duip2'); ?>" style="width: 13px;"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('duip'); ?><?php echo form_error('duip2'); ?></td>
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
					<td><input name="tbjp" maxlength="30" value="<?php echo set_value('tbjp'); ?>"/></td>
					<td><input name="telp" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telp'); ?>"/>-<input name="telp2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telp2'); ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('telp'); ?><?php echo form_error('telp2'); ?></td>
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
					<td><input name="resp" maxlength="60" value="<?php echo set_value('resp'); ?>"/></td>
					<td><input name="duir" minlength="8" maxlength="8" value="<?php echo set_value('duir'); ?>" size="5"/>-<input name="duir2" maxlength="1" value="<?php echo set_value('duir2'); ?>" style="width: 13px;"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('duir'); ?><?php echo form_error('duir2'); ?></td>
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
					<td><input name="tbjr" maxlength="30" value="<?php echo set_value('tbjr'); ?>"/></td>
					<td><input name="telr" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telr'); ?>"/>-<input name="telr2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo set_value('telr2'); ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_error('telr'); ?><?php echo form_error('telr2'); ?></td>
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
					<td><textarea name="padecimiento" cols="35" rows="10" maxlength="200"><?php echo set_value('padecimiento'); ?></textarea></td>
					<td><textarea name="medic" cols="35" rows="10" maxlength="200"><?php echo set_value('medic'); ?></textarea></td>
				</tr>
				<!--<tr>
				</tr>-->
			</tbody>
		</table>
		</div>
		<br><br>
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