<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html id="principal-html">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/estilos.css">
    <title>Complejo deportivo UES</title>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script><!-- Incluyendo mi archivo de funciones javascript-->
  </head>
  <body id="principal-body">
  <header>
      <section class="contenedor">
          <h1>Complejo Deportivo UES</h1>
          <p>Escuela de Iniciación de Fútbol Universidad de El Salvador</p>
      </section>
  </header>
  <nav>
    <ul class="menucito">
       <a style="color:black;" href="<?php echo base_url(); ?>"><li>Inicio</li></a>
       <a style="color:black;" href="<?php echo base_url('inicio/ayuda'); ?>"><li>Ayuda</li></a>  
    </ul>
  </nav>