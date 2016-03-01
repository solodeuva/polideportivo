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
                <tr><td colspan="2"><?= form_label('Usuario : ','usuario')?></td>
                </tr>
                    <td colspan="2"><input type="text" name="usuario" placeholder="Escriba su usuario" size="19"/></td>
                </tr>
                <tr>
                    <td colspan="2"><?= form_label('Contraseña : ','contraseña')?></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese la Contraseña" size="19"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;"colspan="2"><?= form_submit('','Ingresar al sistema') ?></td>
                </tr> 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <?= form_close() ?>
            </table>
            <?php if (isset($_SESSION['msgError'])): ?>
                <center><?= $this->session->flashdata('msgError'); ?></center>
            <?php endif; ?>
    </div>
    <h4>Nota:</h4>
    <p id="tip-login">Necesita credenciales autorizadas por el administrador del sistema por lo que solo él puede registrar usuarios.</p>
    <br>
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
            <a href="<?= base_url('alumnos/verReporte')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Ver Estadísticas
                </div>
            </div></a>
            <a href="<?= base_url('Usuarios/perfil')?>"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Mi Perfil
                </div>
            </div></a>
            <a onclick="salir()" href="#"><div class="div-menu-sidebar">
                <div class="div-menu-sidebar-in">
                    Cerrar Sesión
                </div>
            </div></a>
    <?php endif; ?>
</aside>