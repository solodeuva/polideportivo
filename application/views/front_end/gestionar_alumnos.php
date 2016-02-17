<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<table width="100%" border="1">
		<tr>
			<td><a style="color:black;" href="<?php echo base_url('alumnos/registrarAlumno'); ?>"><img src="<?php echo base_url(); ?>assets/img/usuarios.png" width="200" height="200"/><br>
				<h2>Registrar Alumno</h2>
			</a></td>
			<td><a style="color:black;" href="<?php echo base_url('alumnos/buscarAlumnos'); ?>"><img src="<?php echo base_url(); ?>assets/img/Edit.ico" width="200" height="200"/><br>
				<h2>Buscar Alumno</h2>
			</a></td>
		</tr>
	</table>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>