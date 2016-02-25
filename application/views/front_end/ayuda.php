<section class="contenido">
		<h1>Manual de Usuario</h1>
	<div class="div-usuarios">
		<h2 id="inicio-sesion">1.	Inicio de Sesión</h2>
		<p>Para hacer uso del sistema se debe poseer un nombre de usuario y una contraseña asignados por el administrador las cuales deberá ingresar en el formulario de inicio de sesión:<p>
		<center><img src="<?php echo base_url(); ?>assets/img/galeria/login.jpg"></center>
		<p>Su sesión tiene un tiempo de expiración de 2 horas.</p>
		<br><br>

		<?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
			<h2 id="gestionar-usuarios">2.	Gestionar Usuarios (Admin)</h2>
			<p>Esta función, nos permite tener el control de los usuarios del sistema.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/gestionar-usuarios.jpg"></center>
			<br>

			<h3 id="crear-usuario">2.1 Crear Usuarios</h3>
			<p>Nos permite crear nuevas credenciales para usuarios en el sistema para que puedan hacer uso del mismo (Esta opción es exclusiva del administrador).</p>
			<p>Los campos a continuación son de carácter obligatorio para agregar un nuevo usuario al sistema:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/nuevo-usuario.jpg"></center>
			<p>Después de ingresados los datos, para guardarlos, se da clic sobre el botón Registrar Usuario. El botón Regresar cancela esta operación y regresa al menú de Gestionar Usuario sin registrar datos.</p>
			<p>Al guardar los datos correctamente también nos llevará al menú de Gestionar Usuarios.</p>
			<br>

			<h3 id="ver-usuarios">2.2 Ver Usuarios</h3>
			<p>Nos permite ejecutar una consulta de los usuarios registrados en el sistema.</p>
			<p>Los resultados se muestran de la siguiente manera:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/ver-usuarios.jpg"></center>
			<p>En la que se muestra a la derecha de cada registro, dos botones con las siguientes características:</p>

			<h4 id="editar-usuario">Editar Usuario:</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/editar.jpg">
			<p>Editar Usuario es una opción un poco similar a Crear Usuario, con la diferencia de que acá aparecen los datos ya registrados del usuario en los campos correspondientes y podemos hacer los cambios respectivos al usuario.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/editar-usuario.jpg"></center>
			<p>Si no desea cambiar la contraseña actual del usuario deberá dejar vacío el campo contraseña para no borrar la contraseña actual, use este campo solo para asignar una nueva contraseña al usuario.</p>
			<p>Después de realizar los cambios, hacemos clic en Actualizar, al guardarse los datos exitosamente, nos redirigirá al menú “Gestionar Usuarios”.</p>
			<p>El botón Regresar nos lleva a los resultados de la búsqueda.</p>

			<h4>Eliminar Usuario</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/eliminar.jpg">
			<p>Elimina un usuario de manera permanente, al darle clic al botón, nos pedirá confirmación de la acción a la cual podemos aceptar o cancelar.</p>
			<br>

			<h2 id="gestionar-niveles">3. Gestionar Niveles (Admin)</h3>
			<p>Esta función, nos permite tener el control de los niveles con los que cuenta la Escuelas de fútbol (Esta opción es exclusiva del administrador).</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/gestionar-niveles.jpg"></center>
			<p>En el caso que la escuela desee abrir nuevos niveles o actualizar el nombre del instructor a cargo de cada nivel haremos uso de esta función.</p>

			<h3 id="crear-nivel">3.1 Crear Nivel</h3>
			<p>Nos permite ingresar al sistema un nuevo nivel de la escuela de futbol y el instructor a cargo.</p>
			<p>Se nos presenta el siguiente formulario en el cual, simplemente daremos un nombre al nivel y el instructor a cargo (ej. Nivel 6 Angel chiquillo).</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/crear-nivel.jpg"></center>
			<p>Después de ingresados los datos, para guardarlos, se da clic sobre el botón Crear Nivel. El botón Regresar hace la función de regresar al menú de Gestionar Niveles.</p>
			<p>Si la operación de guardar los datos se ejecuta correctamente, regresaremos también  al menú Gestionar Niveles.</p>

			<h3 id="ver-niveles">3.2 Ver Niveles</h3>
			<p>Nos permite ejecutar una consulta de los niveles registrados en el sistema.</p>
			<p>Al ingresar a Ver Niveles, se muestra de la siguiente manera:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/ver-niveles.jpg"></center>
			<p>Al final de cada registro del lado derecho, se muestran los botones Editar Nivel y Borrar Nivel:</p>
			
			<h4 id="editar-nivel">Editar Nivel</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/editar.jpg">
			<p>Editar Nivel es una opción un poco similar a Crear Nivel, con la diferencia de que acá aparecen los datos ya registrados del nivel en los campos correspondientes y podemos hacer los cambios respectivos al nivel.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/editar-nivel.jpg"></center>
			<p>Después de realizar los cambios, hacemos clic en Actualizar Nivel, y si se guardaron los datos exitosamente, regresaremos al menú Gestionar Niveles.</p>
			<p>El botón Regresar retorna a la vista anterior.</p>
			
			<h4>Eliminar Nivel</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/eliminar.jpg">
			<p>Elimina un nivel de manera permanente, al darle clic al botón, nos pedirá confirmación de la acción a la cual podemos aceptar o cancelar.</p>
			<p>Si aceptamos estaremos borrando al usuario del sistema, seguido, nos redirige al menú Gestionar Niveles.</p>
			<br><br>

			<h2 id="gestionar-alumnos">4. Gestionar Alumnos</h3>
			<p>Esta función nos permite controlar la información de los alumnos.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/gestionar-alumnos.jpg"></center>

			<h3 id="registrar-alumno">4.1 Registrar Alumno </h3>
			<p>Esta opción nos permite ingresar los datos de un alumno al sistema consistiendo de un formulario con los datos personales necesarios del participante.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/agregar-alumno.jpg"></center>
			<p>Al finalizar de ingresar los datos damos clic en el botón Ingresar Alumno esto creará un registro en la base de datos. El botón Regresar nos lleva nuevamente al menú Gestionar Alumno sin registrar datos.</p>
			<p>Si la operación de guardar los datos se ejecuta correctamente, el sistema volverá al menú Gestionar Alumno.</p>

			<h3 id="buscar-alumno">4.2 Buscar alumno</h3>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/buscar2-alumno.jpg"></center>
			<p>La búsqueda se puede realizar en cinco formas diferentes:</p>
			<p>
				<br>1. Búsqueda por nivel.
				<br>2. Búsqueda por género.
				<br>3. Búsqueda por nombres.
				<br>4. Búsqueda por apellidos.
				<br>5. Buscar todos los alumnos.
			</p>
			<p>Al escoger una de las cinco formas de búsqueda y ejecutarla, se mostrarán los resultados de la siguiente manera:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/result-busq-alum.jpg"></center>
			<p>En la que se muestra, al final de cada registro del lado derecho, una serie de botones:</p>

			<h4>Cambiar Estado</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/estado.jpg">
			<p>El estado del alumno determina como la tabla lo indica si el alumno está activo en la escuela o inactivo.</p>
			<img src="<?php echo base_url(); ?>assets/img/galeria/descripcion-estado.jpg">
			<p>Para cambiar el estado podemos hacerlo de dos maneras:</p>
			<p>La primera es directamente desde los resultados de búsqueda dando clic en la imagen del estado:</p>
			<img src="<?php echo base_url(); ?>assets/img/galeria/descripcion-estado2.jpg">
			<p>Se nos mostrará un cuadro de confirmación, al hacer clic en Aceptar, nos recargara los resultados y será visible el cambio de estado (cambio de color) en el registro del alumno.</p>
			<p>La segunda manera es cambiarlo desde la opción Editar Alumno donde seleccionamos el estado en el listado que se presenta y damos clic en Actualizar Alumno.</p>
			<img src="<?php echo base_url(); ?>assets/img/galeria/estado2.jpg">

			<h4 id="ver-ficha">Ver Ficha</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/ficha.jpg">
			<p>Nos lleva a la siguiente vista:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/ficha2-alumno.jpg"></center>
			<p>En la parte superior se nos presenta la opción de subir una foto del alumno, las cuales no deberán de exceder las dimensiones ya establecidas:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/subir-foto.jpg"></center>
			<p>Presionamos sobre el botón Seleccionar Archivo, el cual nos abre una ventana de explorador, para buscar la foto, seleccionamos la foto y damos clic sobre Subir Foto, esto recargara la página y nos mostrara nuevamente el perfil del alumno, pero ahora con la foto asignada.</p>
			<p>Al final de la ficha del alumno, tenemos dos botones: Imprimir Formato y Regresar a Buscar.</p>
			<p>Regresar a Buscar nos regresa a las opciones de búsqueda (Buscar Alumnos). Imprimir Formato nos lleva a una nueva pestaña donde nos permitirá imprimir desde el navegador la ficha.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/ficha3-alumno.jpg"></center>

			<h4 id="editar-alumno">Editar Alumno</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/editar.jpg">
			<p>Editar alumno, es una opción similar a la ya antes mencionada, Ingresar Alumno, con la diferencia de que acá se cargan los datos ya guardados del alumnos en los campos correspondientes y podemos realizar los cambios respectivos.</p>
			<p>Después de realizar los cambios, hacemos clic en “Actualizar Alumno”, y si se guardaron los datos exitosamente, nos redirigirá al menú Gestionar Alumnos.</p>
			<p>También, se nos muestran 2 botones más, Regresar a Buscar y Eliminar Alumno. Regresar a Buscar no modifica los datos y nos lleva a las opciones de búsqueda. Eliminar Alumno borra el registro del alumno de la base de datos de manera permanente.</p>
			
			<h4>Eliminar Alumno</h4>
			<img src="<?php echo base_url(); ?>assets/img/galeria/eliminar.jpg">
			<p>Al dar clic sobre la imagen, nos mostrará un cuadro de confirmación, daremos clic en Aceptar para borrar los datos de manera permanente y regresando al menú Gestionar Alumno. Esta acción también elimina la foto asociada al alumno.</p>
			<p></p>
			<br><br>

			<h2 id="reportes">5. Reportes Gráficos</h3>
			<p>Esta función, nos permite  conocer las estadísticas de los alumnos por nivel en forma gráfica, además, permite imprimir estos informes.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/reportes.jpg"></center>

			<h3 id="reporte-pastel">5.1 Reporte G. de Pastel</h3>
			<p>Como su nombre lo indica permite conocer las estadísticas a través de un gráfico de pastel.</p>
			<p>Un ejemplo de cómo se muestran los resultados con las estadísticas de los alumnos por nivel.</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/g-pastel.jpg"></center>
			<p>Asimismo, vemos al final, dos botones: Imprimir Formato y Regresar. El primero nos permitirá imprimir las estadísticas desde el navegador de la misma manera que se hace con la ficha personal del alumno. El segundo vuelve al menú Ver Estadísticas.</p>

			<h3 id="reporte-barras">5.2 Reporte G. de Barras</h3>
			<p>Esta funcionalidad es similar a la de Reporte G. de Pastel contando con las mismas opciones pero mostrando los resultados como en la siguiente imagen:</p>
			<center><img src="<?php echo base_url(); ?>assets/img/galeria/g-barras.jpg"></center>
		<?php endif; ?>
	</div><br>
</section>