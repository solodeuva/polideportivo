<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Reporte alumno</h1>
		<img src="<?php echo base_url();?>/assets/img/reportes/reporte.png" alt="Graph"/>

	<br><?php echo $nivel;?><br>
		
			<?php echo $niveles;?>


	<form>
			<input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" />
	</form>
	<br>
<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>