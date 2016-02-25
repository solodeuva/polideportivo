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
					<td><input name="nombres" maxlength="30" value="<?= $nombres;?>" required/></td>
					<td><input name="apellidos" maxlength="30" value="<?= $apellidos;?>" required/></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><input name="estatura" maxlength="4" size="3" value="<?= $estatura;?>"/></td>
					<td><input name="peso" maxlength="3" size="2" value="<?= $peso;?>"/></td>
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
					<td><input name="fnacimiento" maxlength="10" size="10" value="<?= $fnacimiento;?>" required/></td>				
					<td>
						<select name="genero">
						<?php if($genero == 'M'): ?>
							<option value="M" selected="Masculino">Masculino</option>
							<option value="F">Femenino</option>
						<?php else: ?>
							<option value="M">Masculino</option>
							<option value="F" selected="Femenino">Femenino</option>
						<?php endif;?>
						</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top">Fecha ingresada invalida</td>
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
					<td><input name="dir" maxlength="100" value="<?= $dir;?>" /></td>
					<td><input name="tel" maxlength="9" value="<?= $tel;?>" size="7"/></td>
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
					<td><textarea name="exp" cols="40" rows="10" maxlength="250"><?= $exp;?></textarea></td>
					<td style="vertical-align:top">
						<select name="nivel">
						<?php foreach ($niveles as $n) { ?>
							<?php if($nivel == $n->getIdNivel()): ?>
								<option value="<?= $n->getIdNivel();?>" selected="<?php echo $n->getNombre();?>"><?php echo $n->getNombre();?></option>
							<?php else: ?>
								<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
							<?php endif;?>
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
					<td><input name="madre" maxlength="60" value="<?= $madre;?>" /></td>
					<td><input name="duim" maxlength="10" size="7" value="<?= $duim;?>"/></td>
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
					<td><input name="tbjm" maxlength="100" value="<?= $tbjm;?>" /></td>
					<td><input name="telm" maxlength="9" value="<?= $telm;?>" size="7"/></td>
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
					<td><input name="padre" maxlength="60" value="<?= $padre;?>" /></td>
					<td><input name="duip" maxlength="10" size="7" value="<?= $duip;?>"/></td>
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
					<td><input name="tbjp" maxlength="100" value="<?= $tbjp;?>" /></td>
					<td><input name="telp" maxlength="9" value="<?= $telp;?>" size="7"/></td>
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
					<td><input name="resp" maxlength="60" value="<?= $resp;?>" /></td>
					<td><input name="duir" maxlength="10" value="<?= $duir;?>" size="7"/></td>
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
					<td><input name="tbjr" maxlength="100" value="<?= $tbjr;?>" /></td>
					<td><input name="telr" maxlength="9" value="<?= $telr;?>" size="7"/></td>
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
					<td><textarea name="padecimiento" cols="40" rows="10" maxlength="200"><?= $padecimiento;?></textarea></td>
					<td><textarea name="medic" cols="40" rows="10" maxlength="200"><?= $medic;?></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	<br>	
	<?= form_submit('','Ingresar Alumno')?>
	<?= form_close()?>
	<br>
		<form action="<?php echo base_url('alumnos/gestionarAlumnos');?>">
			<input type="submit" value="Regresar"/>
		</form>
	<br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>