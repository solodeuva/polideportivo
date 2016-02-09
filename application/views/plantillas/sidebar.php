<aside>
    <?php if (!(isset($_SESSION['logged_in']))) : #si logged_in no esta predefinido mostrara el formulario de login
    ?>                 
    <div class="div-login">
            <h3>Iniciar Sesión</h3>
            <table>
                <?= form_open("Usuarios/login") ?>
                    <?php
                        $car = array( #esto se hace para pasarle los atributos al input de Nombre:
                            'name' => 'usuario',
                            'placeholder' => 'Escriba su usuario' 
                        );
                    ?>
                <tr><td style="text-align:left"><?= form_label('Usuario : ','usuario')?></td>
                    <td><?= form_input($car,set_value('usuario'))?></td>
                </tr>
                <tr><td style="text-align:left"><?= form_label('Contraseña : ','contraseña')?></td>
                    <td><input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa la Contraseña">
                    </td>
                </tr>
                <tr><td></td>
                    <td><?= form_submit('','Ingresar al sistema') ?></td>
                </tr> 
                <?= form_close() ?>
            </table>
            <?php if (isset($_SESSION['msgError'])): ?>
                <?= $this->session->flashdata('msgError'); ?>
            <?php endif; ?>
    </div>
    <?php else : #si logged_in esta predefinido muestra el saludo
    ?>
    <h4>Bienvenid@: <?php echo $this->session->userdata('nombre');?></h4>

        <?php if ($_SESSION['user_id'] == 1) : #si logged_in no esta predefinido mostrara el formulario de login
        ?> 
            <a href="<?= base_url('Usuarios/gestionarUsuarios')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Gestionar Usuarios
                </div>
            </div></a>
            <a href="<?= base_url('Niveles/gestionarNiveles')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Gestionar Niveles
                </div>
            </div></a>
        <?php endif; #Las opciones anteriores solo se mostraran al administrador
        ?>
        
            <a href="<?= base_url('alumnos/gestionarAlumnos')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Gestionar Alumnos
                </div>
            </div></a>
            <a href="<?= base_url('Usuarios/logout')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Ver Estadísticas
                </div>
            </div></a>
            <a onclick="salir()" href="#"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Cerrar Sesion
                </div>
            </div></a>
    <?php endif; ?>
</aside>