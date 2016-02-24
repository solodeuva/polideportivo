<aside>              
    <h3>Contenido</h3>
    <ol>
        <a href="#inicio-sesion"><li>Inicio de Sesión</li></a>
        <?php if(isset($_SESSION['logged_in'])): #si ha iniciado sesion se mostrara el contenido sino el mensaje de error?>
        <a href="#gestionar-usuarios"><li>Gestionar Usuarios</li></a>
        <ul>
            <a href="#crear-usuario"><li>Crear Usuario</li></a>
            <a href="#ver-usuarios"><li>Ver Usuario</li></a>
            <ul>
                <a href="#editar-usuario"><li>Editar Usuario</li></a>
            </ul>
        </ul>
        <a href="#gestionar-niveles"><li>Gestionar Niveles</li></a>
        <ul>
            <a href="#crear-nivel"><li>Crear Nivel</li></a>
            <a href="#ver-niveles"><li>Ver Niveles</li></a>
            <ul>
                <a href="#editar-nivel"><li>Editar Nivel</li></a>
            </ul>
        </ul>
        <a href="#gestionar-alumnos"><li>Gestionar Alumnos</li></a>
        <ul>
            <a href="#registrar-alumno"><li>Registrar Alumno</li></a>
            <a href="#buscar-alumno"><li>Buscar Alumnos</li></a>
            <ul>
                <a href="#ver-ficha"><li>Ficha Alumno</li></a>
                <a href="#editar-alumno"><li>Editar Alumno</li></a>
            </ul>
        </ul>
        <a href="#reportes"><li>Reportes Gráficos</li></a>
        <ul>
            <a href="#reporte-pastel"><li>Reporte G. de Pastel</li></a>
            <a href="#reporte-barras"><li>Reporte G. de Barras</li></a>
        </ul>
    </ol>
            <a onclick="salir()" href="#">Cerrar Sesion</a>
    <br><br>
    <?php endif; ?>
</aside>