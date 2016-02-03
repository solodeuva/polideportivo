<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	
	public function registrarAlumno()
	{
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/agregar_alumno');
		$this->load->view('plantillas/footer');
	}

	public function gestionarAlumnos(){
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/gestionar_alumnos');
		$this->load->view('plantillas/footer');
	}
}