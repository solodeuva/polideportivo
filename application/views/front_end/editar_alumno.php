<?php function calcular_edad($fecha){
		$dias = explode('/', $fecha, 3);
		$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
		$edad = (int)((time()-$dias)/31556926 );
		return $edad;						
}
?>
<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<br>
	<h1>Editar Alumno</h1>
	<?= form_open('Alumnos/actualizarAlumno')?>
	<div class="buscar-alumno">
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
					<td>&nbsp;</td><!-- Esto es para dejar un espacio entre filas-->
					<td></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><input name="estatura" maxlength="4" size="3" value="<?php echo $alumno->getEstatura();?>"/>m.</td>
					<td><input name="peso" maxlength="3" size="2" value="<?php echo $alumno->getPeso();?>"/>lbs.</td>
				</tr>
				<tr>
					<td>(ingrese solo números Ej. 1.70)</td>
					<td>(ingrese solo números Ej. 145)</td>
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
					<td>Género:</td>
				</tr>
				<tr>
					<td>
					<?php 
						$fecha = explode('/',$alumno->getFechaNacimiento(), 3);
						$fecha2 = $fecha[2]."-".$fecha[1]."-".$fecha[0];
					?>
					<input name="fnacimiento" type="date" value="<?php echo $fecha2;?>" required/></td>				
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
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Dirección de Residencia:</td>
					<td>Teléfono:</td>
				</tr>
				<tr>
					<td><input name="dir" maxlength="100" value="<?php echo $alumno->getDireccion();?>" /></td>
					<td>
					<?php/*el siguiente codigo, verifica que explode() haya hecho su trabajo en una cadena de caracteres
							y no sobre una cadena de espacios en blanco. Es aplicado en cada campo telefono y dui.*/
							$tel = explode('-', $alumno->getTelefono());
							$tel1 = $tel[0];
						if(strcmp($tel1, "")==4):
							$tel2 = $tel[1];?>
							<input name="tel" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $tel1; ?>"/>-<input name="tel2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $tel2; ?>"/></td>
					<?php
						else:?>
							<input name="tel" style="width: 35px;" minlength="4" maxlength="4" value=""/>-<input name="tel2" style="width: 35px;" minlength="4" maxlength="4" value=""/></td>
					<?php endif;?>
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
					<td><textarea name="exp" cols="35" rows="10" maxlength="250"><?php echo $alumno->getExpPrevia();?></textarea></td>
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
					<td>
					<?php
							$duim = explode('-', $alumno->getDuiMadre());
							$duim1 = $duim[0];
						if(strcmp($duim1, "")==8):
							$duim2 = $duim[1];?>
							<input name="duim" minlength="8" maxlength="8" value="<?php echo $duim1; ?>" size="5"/>-<input name="duim2" maxlength="1" value="<?php echo $duim2; ?>" style="width: 13px;"/></td>
					<?php
						else:?>
							<input name="duim" minlength="8" maxlength="8" value="" size="5"/>-<input name="duim2" maxlength="1" value="" style="width: 13px;"/></td>
					<?php endif;?>
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
					<td><input name="tbjm" maxlength="100" value="<?php echo $alumno->getTrabajoMadre();?>" /></td>
					<td>
					<?php
							$telm = explode('-', $alumno->getTelMadre());
							$telm1 = $telm[0];
						if(strcmp($telm1, "")==4):
							$telm2 = $telm[1];?>
							<input name="telm" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telm1; ?>"/>-<input name="telm2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telm2; ?>"/></td>
					<?php
						else:?>
							<input name="telm" style="width: 35px;" minlength="4" maxlength="4" value=""/>-<input name="telm2" style="width: 35px;" minlength="4" maxlength="4" value=""/></td>
					<?php endif;?>
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
					<td><input name="padre" maxlength="60" value="<?php echo $alumno->getNombrePadre();?>" /></td>
					<td>
					<?php
							$duip = explode('-', $alumno->getDuiPadre());
							$duip1 = $duip[0];
						if(strcmp($duip1, "")==8):
							$duip2 = $duip[1];?>
							<input name="duip" minlength="8" maxlength="8" value="<?php echo $duip1; ?>" size="5"/>-<input name="duip2" maxlength="1" value="<?php echo $duip2; ?>" style="width: 13px;"/></td>
					<?php
						else:?>
							<input name="duip" minlength="8" maxlength="8" value="" size="5"/>-<input name="duip2" maxlength="1" value="" style="width: 13px;"/></td>
					<?php endif;?>
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
					<td><input name="tbjp" maxlength="100" value="<?php echo $alumno->getTrabajoPadre();?>" /></td>
					<td>
					<?php
							$telp = explode('-', $alumno->getTelPadre());
							$telp1 = $telp[0];
						if (strcmp($telp1, "")==4):
							$telp2 = $telp[1];?>
							<input name="telp" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telp1; ?>"/>-<input name="telp2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telp2; ?>"/></td>
					<?php
						else:?>
							<input name="telp" style="width: 35px;" minlength="4" maxlength="4" value=""/>-<input name="telp2" style="width: 35px;" minlength="4" maxlength="4" value=""/></td>
					<?php endif;?>
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
					<td>
						<?php
								$duir = explode('-', $alumno->getDuiResp());
								$duir1 = $duir[0];
							if (strcmp($duir1, "")==8):
								$duir2 = $duir[1];?>
								<input name="duir" minlength="8" maxlength="8" value="<?php echo $duir1; ?>" size="5"/>-<input name="duir2" maxlength="1" value="<?php echo $duir2; ?>" style="width: 13px;"/>					</td>
						<?php	
							else:?>
								<input name="duir" minlength="8" maxlength="8" value="" size="5"/>-<input name="duir2" maxlength="1" value="" style="width: 13px;"/>					</td>
						<?php endif;?>
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
					<td><input name="tbjr" maxlength="100" value="<?php echo $alumno->getTrabajoResp();?>" /></td>
					<td>
						<?php
								$telr = explode('-', $alumno->getTelResp());
								$telr1 = $telr[0];
							if (strcmp($telr1, "")==4):
								$telr2 = $telr[1];?>
								<input name="telr" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telr1; ?>"/>-<input name="telr2" style="width: 35px;" minlength="4" maxlength="4" value="<?php echo $telr2; ?>"/></td>
						<?php	
							else:?> 
								<input name="telr" style="width: 35px;" minlength="4" maxlength="4" value=""/>-<input name="telr2" style="width: 35px;" minlength="4" maxlength="4" value=""/></td>
						<?php endif;?>
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
					<td><textarea name="padecimiento" cols="35" rows="10" maxlength="200"><?php echo $alumno->getPadecimientos();?></textarea></td>
					<td><textarea name="medic" cols="35" rows="10" maxlength="200"><?php echo $alumno->getMedicamentos();?></textarea></td>
				</tr>
				<tr>
					<td><input type="hidden" value="<?php echo $alumno->getIdAlumno();?>" name="id"/></td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<br>
	<center>
		<?= form_submit('','Actualizar Alumno')?>
		<?= form_close()?>
	</center>
	<br>
	<center>
		<form action="<?php echo base_url('alumnos/buscarAlumnos');?>">
		<input type="submit" value="Regresar a Buscar"/>
		</form>
	</center>
	<br>
		<center><input type="button" value="Eliminar Alumno" onclick="eliminarAlumno(<?php echo $alumno->getIdAlumno();?>)"></center>
		<br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>