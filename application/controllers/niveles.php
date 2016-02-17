<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Niveles extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('nivel_model');
	}

	public function gestionarNiveles(){
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/gestionar_niveles');
		$this->load->view('plantillas/footer');
	}

	public function nuevoNivel(){
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/nuevo_nivel');
		$this->load->view('plantillas/footer');
	}

	public function agregarNivel(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'instructor' => $this->input->post('instructor')
			);
		$this->nivel_model->crearNivel($data);
		redirect(base_url('Niveles/gestionarNiveles'));
	}

	public function verNiveles(){
		$data['nivel'] = $this->nivel_model->obtenerNiveles();
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_niveles',$data);
		$this->load->view('plantillas/footer');
	}

	public function editarNivel($id){
		$this->load->helper('form');
		$data['nivel'] = $this->nivel_model->getNivel($id);
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/editar_nivel',$data);
		$this->load->view('plantillas/footer');
	}

	public function actualizarNivel(){
		$id 	= $this->input->post('id');
		$data 	= array(
		'nombre' 		=> $this->input->post('nombre'),
		'instructor' 	=> $this->input->post('instructor')
		);
		$this->nivel_model->actualizarNivel($data,$id);
		redirect(base_url('Niveles/gestionarNiveles'));
	}

	public function eliminarNivel($id){
		$this->nivel_model->borrarNivel($id);
		redirect(base_url('Niveles/gestionarNiveles'));
	}
}