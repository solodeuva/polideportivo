<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/inicio_view');
		$this->load->view('plantillas/footer');
	}

	public function errorContenido(){
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/error_contenido');
		$this->load->view('plantillas/footer');
	}

	public function ayuda(){
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar_ayuda');
		$this->load->view('front_end/ayuda');
		$this->load->view('plantillas/footer');
	}

}