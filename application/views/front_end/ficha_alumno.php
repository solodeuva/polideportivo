<?php function calcular_edad($fecha){
		$dias = explode('/', $fecha, 3);
		$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
		$edad = (int)((time()-$dias)/31556926 );
		return $edad;						
}
?>
<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
<br><br>
<center>
<table>
	<?php echo form_open_multipart('alumnos/do_upload');?>
	<tr>
		<td>Tamaño de foto no mayor a 400x533 (recomendado 240x320)</td>
	</tr>
	<tr>
		<td>Foto de Perfil: <input type="file" name="userfile" size="20" /></td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Subir Foto" />
			<input type="hidden" value="<?php echo $alumno->getIdAlumno();?>" name="id"/>
		</td>
	</tr>
	</form>
	<tr>
		<td><?php echo $error;?></td>
	</tr>
</table>
</center>
<div id="ficha">
	<h1>Ficha Personal del Alumno</h1>
	<center>
		<table width="auto">
			<tbody>
				
				<tr>
					<td><b>Nombre del alumno:</b></td>
					<td><b>Apellidos del alumno:</b></td>
					<td><b>Foto</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getNombres();?></td>
					<td><?php echo $alumno->getApellidos();?></td>
					<td rowspan="5"><img src="<?php echo base_url(); ?>assets/uploads/alumnos/<?php echo $alumno->getIdAlumno();?>.png" width="130" height="173" border="0"></td>
				</tr>

				<tr>
					<td><b>Estatura:</b></td>
					<td><b>Peso:</b></td>
					
				</tr>
				<tr>
					<td><?php echo $alumno->getEstatura();?></td>
					<td><?php echo $alumno->getPeso();?></td>
				</tr>

				<tr>
					<td><b>Genero:</b></td>
					<td><b>Estado:</b></td>
				</tr>
				<tr>
					<td><?php if($alumno->getGenero() =='M') 
								echo "Masculino"; 
							  else
							  	echo "Femenino";
						?>
					</td>
					<td>
						<?php if($alumno->getEstado() == 'A')
								echo "Activo";
								else
								echo "Inactivo";
						 ?>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td><!-- Esto es para dejar un espacio entre filas-->
				</tr>
				<tr>
					<td><b>Fecha de nacimiento:</b></td>
					<td><b>Edad:</b></td>
					<td><b>Dirección de Residencia:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getFechaNacimiento();?></td>
					<td><?php echo calcular_edad($alumno->getFechaNacimiento());?></td>
					<td><?php echo $alumno->getDireccion();?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Telefono:</b></td>
					<td><b>Nivel:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getTelefono();?></td>
					<td height="20"><?php echo $alumno->getIdNivel()->getIdNivel(); ?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Experiencia previa:</b></td>
					<td><b>Padecimientos del inscrito:</b></td>
					<td><b>Medicinas:</b></td>
				</tr>
				<tr>
					<td height="20"><?php echo $alumno->getExpPrevia();?></td>
					<td height="20"><?php echo $alumno->getPadecimientos();?></td>
					<td height="20"><?php echo $alumno->getMedicamentos();?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Nombre de la Madre:</b></td>
					<td><b>DUI de la madre:</b></td>
					<td><b>Telefóno de la madre:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getNombreMadre();?></td>
					<td><?php echo $alumno->getDuiMadre();?></td>
					<td><?php echo $alumno->getTelMadre();?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>

				</tr>
				<tr>
					<td><b>Lugar de trabajo:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getTrabajoMadre();?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Nombre del Padre:</b></td>
					<td><b>DUI del padre:</b></td>
					<td><b>Telefóno del padre:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getNombrePadre();?></td>
					<td><?php echo $alumno->getDuiPadre();?></td>
					<td><?php echo $alumno->getTelPadre();?></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Lugar de trabajo:</b></td>
				</tr>
				<tr>
					<td><?php echo $alumno->getTrabajoPadre();?></td>
					<td>&nbsp;</td>
				
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2"><b>En caso de no contar con padres. Datos del responsable:</b></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>

				<tr>
					<td><b>Nombre del responsable:</b></td>
					<td><b>DUI del responsable:</b></td>
					<td><b>Telefono del Responsable:</b></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><?php echo $alumno->getNombreResp();?></td>
					<td><?php echo $alumno->getDuiResp();?></td>
					<td><?php echo $alumno->getTelResp();?></td>
					<td>&nbsp;</td>
				</tr>

				<tr>
					<td><b>Lugar de trabajo:</b></td>
					<td></td>
					<td></td>
					<td>&nbsp;</td>			
				</tr>
				<tr>
					<td><?php echo $alumno->getTrabajoResp();?></td>
					<td></td>
					<td></td>
					<td>&nbsp;</td>					
				</tr>
			</tbody>
		</table>
	</center>
	<br><br>
</div>
<input type="button" value="Imprimir Formato" onclick="javascript:imprSelec('ficha');function imprSelec(ficha)
{var ficha=document.getElementById(ficha);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();};" /><br><br>
<input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" />
<br><br>
<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>