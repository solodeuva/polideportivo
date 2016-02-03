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
			$_SESSION['nombre'] = (string)$user->nombres;
			$_SESSION['logged_in']    = (bool)true;
			redirect(base_url());
		}
		else{
			//Creando un mensaje de error con flashdata
			$this->session->set_flashdata('msgError','El usuario o contraseña es incorrecto');
			redirect(base_url());
		}
	}
	public function logout() {
		// Si la llave logged_in existe y es true la session sigue activa y se destruye manualmente
		if (isset($_SESSION['logged_in'])) {

			$this->session->sess_destroy();
			redirect(base_url());
		} else {
			
			// Cuando la sesion ha expirado y el usuario llama al método la llave logged_in ya no existe
			// por lo que ya no se puede destruir la sesion y se redirecciona a la pagina principal
			redirect(base_url());
		}
	}
}