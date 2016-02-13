<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Datos del alumno</h1>
	<?= form_open('Alumnos/actualizarAlumno')?>
		<table class="tabla">
			<tbody>
				<tr>
					<td style="{font-color:red;}">Nombre del alumno:</td>
					<td>Apellidos del alumno:</td>
				</tr>
				<tr>
					<td><?= form_input('nombre',$alumno->getNombres())?></td>
					<td><?= form_input('apellido',$alumno->getApellidos())?></td>
				</tr>
				<tr>
					<td>Estatura:</td>
					<td>Peso:</td>
				</tr>
				<tr>
					<td><?= form_input('estatura',$alumno->getEstatura();)?></td>
					<td><?= form_input('peso',$alumno->getPeso())?></td>
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
					<td><?= form_input('fnacimiento',$alumno->getFechaNacimiento())?></td>				
					<td>
					<select name="genero" id="">
						<?php if($alumno->getGenero()=="M")?>
							<option selected value="M">Masculino</option>
						<?php else?>
							<option selected value="F">Femenino</option>
					</select>
					<select name="nivel" id="">
					<?php foreach ($nivel as $n) { ?>
						<?php if($n->getIdNivel()==$alumno->getIdNivel())?>
							<option selected value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
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
					<td><?= form_input('dir',$alumno->getDireccion())?></td>
					<td><?= form_input('tel',$alumno->getTelefono())?></td>
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
					<td><?= form_input('madre',$alumno->getNombreMadre())?></td>
					<td><?= form_input('duim',$alumno->getDuiMadre())?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno de la madre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjm',$alumno->getTrabajoMadre())?></td>
					<td><?= form_input('telm',$alumno->getTelMadre())?></td>
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
					<td><?= form_input('padre',$alumno->getNombrePadre())?></td>
					<td><?= form_input('duip',$alumno->getDuiPadre)?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefóno del padre:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjp',$alumno->getTrabajoPadre())?></td>
					<td><?= form_input('telp',$alumno->getTelPadre())?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>Experiencia previa:</td>
					<td>Estado:</td>
				</tr>
				<tr>
					<td><?= form_textarea('exp',$alumno->getExpPrevia())?></td>
					<td><?= form_input('estado',$alumno->getEstado())?></td>
				</tr>
				<tr>
					<td colspan="2">En caso de no contar con los padres mencionar un responsable:</td>
				</tr>
				<tr>
					<td>Nombre del responsable:</td>
					<td>DUI del responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('resp',$alumno->getNombreResp())?></td>
					<td><?= form_input('duir',$alumno->getDuiResp())?></td>
				</tr>
				<tr>
					<td>Lugar de trabajo:</td>
					<td>Telefono del Responsable:</td>
				</tr>
				<tr>
					<td><?= form_input('tbjr',$alumno->getTrabajoResp())?></td>
					<td><?= form_input('telr',$alumno->getTelResp())?></td>
				</tr>
				<tr>
					<td>Padecimientos del inscrito:</td>
					<td>Medicinas:</td>
				</tr>
				<tr>
					<td><?= form_textarea('padecimiento',$alumno->getPadecimientos())?></td>
					<td><?= form_textarea('medic',$alumno->getMedicamentos())?></td>
				</tr>
				<tr>
					<td><input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" /></td>
					<td><center><?= form_submit('','Actualizar Datos')?></center></td>
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