<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<?php if($_SESSION['user_id'] == 1):?>
		<div class="contenedor-botones">
				<div class="botones">
					<a style="color:black;" href="<?php echo base_url('Niveles/nuevoNivel'); ?>"><img src="<?php echo base_url(); ?>assets/img/crear-nivel.png"/><br>
						<h2>Crear Nivel</h2>
					</a>
				</div>
				<div class="botones">
					<a style="color:black;" href="<?php echo base_url('Niveles/verNiveles'); ?>"><img src="<?php echo base_url(); ?>assets/img/ver-niveles.png"/><br>
						<h2>Ver Niveles</h2>
					</a>
				</div>
		</div>
	<?php else: ?>
		<br><br><br><br><br><br><br>
			<h2>No tienes los permisos suficientes para ver este contenido.</h2>
		<br><br><br><br><br><br><br>
	<?php endif; ?>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>