<?php function calcular_edad($fecha){
		$dias = explode('/', $fecha, 3);
		$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
		$edad = (int)((time()-$dias)/31556926 );
		return $edad;						
}
?>
<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Editar Alumno</h1>
	<?= form_open('Alumnos/actualizarAlumno')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td>Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><input name="nombres" maxlength="30" value="<?php echo $alumno->getNombres();?>" required/></td>
					<td><input name="apellidos" maxlength="30" value="<?php echo $alumno->getApellidos();?>" required/></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><input name="estatura" maxlength="4" size="3" value="<?php echo $alumno->getEstatura();?>"/></td>
					<td><input name="peso" maxlength="3" size="2" value="<?php echo $alumno->getPeso();?>"/></td>
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
					<td>Estado:</td>
					<td>Edad:</td>
				</tr>
				<tr>
					<td>
						<select name="estado">
						<?php if($alumno->getEstado() == 'A'): ?>
							<option value="A" selected="Activo">Activo</option>
							<option value="B">Inactivo</option>
						<?php else: ?>
							<option value="A">Activo</option>
							<option value="B" selected="Inactivo">Inactivo</option>
						<?php endif;?>
						</select>
					</td>
					<td><?php echo calcular_edad($alumno->getFechaNacimiento());?></td>
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
					<td><input name="fnacimiento" maxlength="10" size="10" value="<?php echo $alumno->getFechaNacimiento();?>" required/></td>				
					<td>
						<select name="genero">
						<?php if($alumno->getGenero() == 'M'): ?>
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
					<td><input name="dir" maxlength="100" value="<?php echo $alumno->getDireccion();?>" /></td>
					<td><input name="tel" maxlength="9" value="<?php echo $alumno->getTelefono();?>" size="7"/></td>
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
					<td><textarea name="exp" cols="40" rows="10" maxlength="250"><?php echo $alumno->getExpPrevia();?></textarea></td>
					<td style="vertical-align:top">
						<select name="nivel">
						<?php foreach ($nivel as $n) { ?>
							<?php if($alumno->getIdNivel()->getIdNivel() == $n->getIdNivel()): ?>
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
					<td><input name="madre" maxlength="60" value="<?php echo $alumno->getNombreMadre();?>" /></td>
					<td><input name="duim" maxlength="10" size="7" value="<?php echo $alumno->getDuiMadre();?>"/></td>
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
					<td><input name="tbjm" maxlength="100" value="<?php echo $alumno->getTrabajoMadre();?>" /></td>
					<td><input name="telm" maxlength="9" value="<?php echo $alumno->getTelMadre();?>" size="7"/></td>
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
					<td><input name="padre" maxlength="60" value="<?php echo $alumno->getNombrePadre();?>" /></td>
					<td><input name="duip" maxlength="10" size="7" value="<?php echo $alumno->getDuiPadre();?>"/></td>
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
					<td><input name="tbjp" maxlength="100" value="<?php echo $alumno->getTrabajoPadre();?>" /></td>
					<td><input name="telp" maxlength="9" value="<?php echo $alumno->getTelPadre();?>" size="7"/></td>
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
					<td><input name="resp" maxlength="60" value="<?php echo $alumno->getNombreResp();?>" /></td>
					<td><input name="duir" maxlength="10" value="<?php echo $alumno->getDuiResp();?>" size="7"/></td>
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
					<td><input name="tbjr" maxlength="100" value="<?php echo $alumno->getTrabajoResp();?>" /></td>
					<td><input name="telr" maxlength="9" value="<?php echo $alumno->getTelResp();?>" size="7"/></td>
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
					<td><textarea name="padecimiento" cols="40" rows="10" maxlength="200"><?php echo $alumno->getPadecimientos();?></textarea></td>
					<td><textarea name="medic" cols="40" rows="10" maxlength="200"><?php echo $alumno->getMedicamentos();?></textarea></td>
				</tr>
				<tr>
					<td><input type="hidden" value="<?php echo $alumno->getIdAlumno();?>" name="id"/></td>
				</tr>
				<tr>
					<td><input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" /></td>
					<td><center><?= form_submit('','Actualizar Alumno')?></center></td>
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