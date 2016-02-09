<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
	<h1>Ver usuarios</h1>
	<div class="div-usuarios">
		<table class="tabla-usuarios">
			<thead align="left">
	           <tr>
	             <th >Nombres</th>
	             <th >Apellidos</th>
	             <th >Nick/User</th>
	             <th width="10%"></th>
	           </tr>
        </thead>
			<tbody>
			<?php foreach($usuarios as $u) { ?>
				<tr>
					<td><?php echo $u->getNombres(); ?></td>
					<td><?php echo $u->getApellidos(); ?></td>
					<td><?php echo $u->getNick(); ?></td>
					<td><a href="<?php echo base_url('Usuarios/editarUsuario/'.$u->getIdUsuario()); ?>"><img src="<?php echo base_url(); ?>assets/img/edit.png" width="24" height="24" border="0"></a>
					    <a onclick="eliminarUsuario(<?php echo $u->getIdUsuario(); ?>)" href="#" ><img src="<?php echo base_url(); ?>assets/img/delete.png" width="24" height="24" border="0"></a>
					</td>
				</tr>
			<?php } ?>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
		<form>
			<input type="button" value="Volver atrás" name="volver atrás2" onclick="history.back()" />
		</form>
	</div><br>
<?php else: ?>
	<br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br>
<?php endif; ?>
</section>