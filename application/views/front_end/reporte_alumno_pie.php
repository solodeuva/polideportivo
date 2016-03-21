<script type="text/javascript">
function imprSelec(muestra)
{var ficha=document.getElementById(muestra).innerHTML;var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha);ventimp.document.close();ventimp.print();ventimp.close();}
</script> 
<section class="contenido">
<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
		<div id="muestra">
			<br>
			<center><h1>Reporte de Alumnos Inscritos</h1></center>
			<br>
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
			<table>
				<tr>
					<td><img src="<?php echo base_url();?>/assets/img/reportes/reporte.jpg" alt="Grafico" width="98%"></td>
				</tr>
			</table>
			</center>
		</div>
		<br><br>
		<center>
			<input type="button" value="Imprimir Formato" onclick="javascript:imprSelec('muestra');" >
			<br><br>
 			<a href="<?php echo base_url(); ?>alumnos/verReporte"><input type="button" value="Regresar" /></a>
 		</center>
	<br><br>
<?php else: ?>
	<br><br><br><br><br><br><br>
	<h2>Tu sesión expiró o no has iniciado sesión, por favor inicia sesión para ver este contenido</h2>
	<br><br><br><br><br><br><br>
<?php endif; ?>
</section>