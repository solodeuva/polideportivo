<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum=scale=1, minimum-scale=1"><!-- indispensable para responsive-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css">
    <title>Complejo deportivo UES</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script><!-- Incluyendo mi archivo de funciones javascript-->
  </head>
  <body>
      <header>
          <section class="contenedor">
              <h1>Complejo Deportivo UES</h1>
              <p>Escuela de Iniciación de Fútbol Universidad de El Salvador</p>
           </section>
       </header>  

      <nav>
        <section class="contenedor">
          <ul class="menucito">
             <a style="color:black;" href="<?php echo base_url(); ?>"><li>Inicio</li></a>
             <a style="color:black;" href="<?php echo base_url('inicio/ayuda'); ?>"><li>Ayuda</li></a>  
          </ul>
        </section>
      </nav>

      <section class="contenedor">