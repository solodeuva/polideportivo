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
						<td><?php echo $alumno->getNombres();?></td>
						<td><?php echo $alumno->getApellidos();?></td>
					</tr>
					<tr>
						<td>Estatura:</td>
						<td>Peso:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getEstatura();?></td>
						<td><?php echo $alumno->getPeso();?></td>
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
						<td><?php echo $alumno->getFechaNacimiento();?></td>				
						<td><?php echo $alumno->getGenero();?>
							<?php echo $alumno->getIdNivel();?>
						</td>
					</tr>
					<tr>
						<td>Dirección de Residencia:</td>
						<td>Telefono:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getDireccion();?></td>
						<td><?php echo $alumno->getTelefono();?></td>
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
						<td><?php echo $alumno->getNombreMadre();?></td>
						<td><?php echo $alumno->getDuiMadre();?></td>
					</tr>
					<tr>
						<td>Lugar de trabajo:</td>
						<td>Telefóno de la madre:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getTrabajoMadre();?></td>
						<td><?php echo $alumno->getTelMadre();?></td>
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
						<td><?php echo $alumno->getNombrePadre();?></td>
						<td><?php echo $alumno->getDuiPadre();?></td>
					</tr>
					<tr>
						<td>Lugar de trabajo:</td>
						<td>Telefóno del padre:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getTrabajoPadre();?></td>
						<td><?php echo $alumno->getTelPadre();?></td>
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
						<td><?php echo $alumno->getExpPrevia();?></td>
						<td><?php echo $alumno->getEstado();?></td>
					</tr>
					<tr>
						<td colspan="2">En caso de no contar con los padres mencionar un responsable:</td>
					</tr>
					<tr>
						<td>Nombre del responsable:</td>
						<td>DUI del responsable:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getNombreResp();?></td>
						<td><?php echo $alumno->getDuiResp();?></td>
					</tr>
					<tr>
						<td>Lugar de trabajo:</td>
						<td>Telefono del Responsable:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getTrabajoResp();?></td>
						<td><?php echo $alumno->getTelResp();?></td>
					</tr>
					<tr>
						<td>Padecimientos del inscrito:</td>
						<td>Medicinas:</td>
					</tr>
					<tr>
						<td><?php echo $alumno->getPadecimientos();?></td>
						<td><?php echo $alumno->getMedicamentos();?></td>
					</tr>
					<tr>
						<td><center><input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" /></center></td>
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