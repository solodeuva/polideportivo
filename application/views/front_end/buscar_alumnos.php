<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<br>
	<center><h2>Buscar Alumnos</h2></center>
	<div class="buscar-alumno">
		<div class="buscar">
				<h3>Buscar Alumnos por nivel:</h3>
				<form action="<?php echo base_url('alumnos/buscarPorNivel2');?>" method="post" accept-charset="utf-8">
					<select name="nivel">
							<?php foreach ($nivel as $n) { ?>
								<option value="<?= $n->getIdNivel();?>"><?php echo $n->getNombre();?></option>
							<?php } ?>
					</select>
					<input type="submit" name="buscar" value="Buscar"  />			
				</form>
		</div>
		<div class="buscar">
				<h3>Buscar Alumnos por Género:</h3>
				<form action="<?php echo base_url('alumnos/buscarPorGenero2');?>" method="post" accept-charset="utf-8">
					<select name="genero">
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
					<input type="submit" value="Buscar"  />			
				</form>
		</div>
		<div class="buscar">
				<h3>Buscar Alumnos por Nombres:</h3>
				<form action="<?php echo base_url('alumnos/buscarPorNombres2');?>" method="post" accept-charset="utf-8">
					<input name="nombres" required/>
					<input type="submit" name="buscar" value="Buscar"  />			
				</form>
		</div>
		<div class="buscar">
				<h3>Buscar Alumnos por Apellidos:</h3>
				<form action="<?php echo base_url('alumnos/buscarPorApellidos2');?>" method="post" accept-charset="utf-8">
					<input name="apellidos" required/>
					<input type="submit" name="buscar" value="Buscar"  />		
				</form>
		</div>
		<div class="buscar">
				<h3>Mostrar Todos los Alumnos:</h3>
				<form action="<?php echo base_url('alumnos/buscarTodos2');?>" method="post" accept-charset="utf-8">
					<center><input type="submit" name="buscar" value="Buscar"  /></center>			
				</form>
		</div>
	</div>
	<br><br>
	<center><input type="button" value="Regresar" name="volver atrás2" onclick="history.back()" /></center>
	<br><br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>