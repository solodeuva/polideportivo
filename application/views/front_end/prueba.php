<section class="contenido">
<?= form_open('inicio/otraPrueba')?>
			<table class="tabla">
				<tbody>
					<tr>
						<td width="30%">Numero</td>
						<td><input type="text" name="nombre" size="3" minlength="4" maxlength="4"/>-<input type="text" name="nombre2" size="3" minlength="4" maxlength="4"/><?php echo form_error('nombre'); ?></td>
						<td><p class="tips">*Ej. Nivel 6, Nivel 7 (no debe repetir nombres ya establecidos)<p></td>
					</tr>
					<tr>
						<td>Numero 2:</td>
						<td><input type="number" name="instructor" maxlength="25" required/></td>
						<td><p class="tips">*Nombre y apellido del instructor a cargo del nivel<p></td>
					</tr>
					<tr>
						<td></td>
						<td><center><?= form_submit('','Probar')?></center></td>
						<td></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<br><br>
<?= form_close()?>
</section>