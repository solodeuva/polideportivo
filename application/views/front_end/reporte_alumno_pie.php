<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
		<div id="ficha">
			<h1>Reporte de Alumnos Inscritos</h1>
			<center>
			<table>
				<thead>
					<tr>
						<th width="60">Nivel</th>
						<th width="160">Instructor</th>
						<th width="160">Total de Alumnos</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($alumpornivel->result() as $a) { ?>
					<tr>
						<td><?php echo $a->nombre; ?></td>
						<td><?php echo $a->instructor; ?></td>
						<td><?php echo $a->total; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table><br><br>
			<img src="<?php echo base_url();?>/assets/img/reportes/reporte.png" alt="Graph"/>
			</center>
			<br><br>
		</div>
		<input type="button" value="Imprimir Formato" onclick="javascript:imprSelec('ficha');function imprSelec(ficha)
{var ficha=document.getElementById(ficha);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();};" />
	<br><br>
	<form action="<?php echo base_url('alumnos/verReporte');?>">
			<input type="submit" value="Regresar"/>
	</form>
	<br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>