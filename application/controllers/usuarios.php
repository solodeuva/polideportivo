<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');
	}
	public function login()
	{
		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('contrasena');
		if($this->usuarios_model->validar_credenciales($usuario,$contrasena)){
			$user = $this->usuarios_model->getUser($usuario);
			$_SESSION['user_id'] = (int)$user->id_usuario;
			$_SESSION['nombre'] = (string)$user->nombre;
			redirect(base_url());
		}
		else{
			//Creando un mensaje de error con flashdata
			$this->session->set_flashdata('msgError','El usuario o contraseña es incorrecto');
			redirect(base_url());
		}
	}
}