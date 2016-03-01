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
			
			$_SESSION['user_id'] 		= (int)$user->id_usuario;
			$_SESSION['nombre'] 		= (string)$user->nombres;
			$_SESSION['logged_in']    	= (bool)true;
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

	public function gestionarUsuarios(){
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/gestionar_usuarios');
		$this->load->view('plantillas/footer');
	}

	public function nuevoUsuario(){
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/nuevo_usuario');
		$this->load->view('plantillas/footer');
	}

	public function agregarUsuario(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="div-error">','</div>');
		$this->form_validation->set_rules('nick','Nick','callback_validarNick');
		if ($this->form_validation->run() == FALSE) {
			$this->nuevoUsuario();
		} else {
			$data = array(
				'nombres' => $this->input->post('nombres'),
				'apellidos' => $this->input->post('apellidos'),
				'nick' => $this->input->post('nick'),
				'contrasena' =>md5($this->input->post('contrasena'))
				);
			$this->usuarios_model->crearUsuario($data);
			redirect(base_url('Usuarios/gestionarUsuarios'));
		}
		
	}

	public function verUsuarios(){
		$data['usuarios'] = $this->usuarios_model->obtenerUsuarios();
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_usuarios',$data);
		$this->load->view('plantillas/footer');
	}

	public function editarUsuario($id){
		if($_SESSION['user_id'] == 1){
		$this->load->helper('form');
		$data['usuario'] = $this->usuarios_model->getUsuario($id); 
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/editar_usuario',$data);
		$this->load->view('plantillas/footer');
		}
		else{
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/gestionar_usuarios');
			$this->load->view('plantillas/footer');
		}
	}

	public function actualizarUsuario(){
		$id = $this->input->post('id');
		$contrasena = $this->input->post('contrasena');
		if(is_null($contrasena))
		{
			$data = array(
			'nombres' => $this->input->post('nombres'),
			'apellidos' => $this->input->post('apellidos'),
			'nick' => $this->input->post('nick'),
			'contrasena' =>$this->input->post('anteriorcontrasena')
			);
		}
		else
		{
			$data = array(
			'nombres' => $this->input->post('nombres'),
			'apellidos' => $this->input->post('apellidos'),
			'nick' => $this->input->post('nick'),
			'contrasena' =>md5($contrasena)
			);
		}
		$this->usuarios_model->actualizarUsuario($data,$id);
		redirect(base_url());
	}

	public function eliminarUsuario($id){
		if($_SESSION['user_id'] == 1){
			$this->usuarios_model->borrarUsuario($id);
			redirect(base_url('Usuarios/gestionarUsuarios'));
		}
		else{
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/error_contenido');
			$this->load->view('plantillas/footer');
		}
	}

	public function perfil(){
		$this->load->helper('form');
		$data['usuario'] = $this->usuarios_model->getUsuario($_SESSION['user_id']);
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/perfil',$data);
		$this->load->view('plantillas/footer');
	}
	public function validarNick($nick)
	{
		$usuarios = $this->usuarios_model->obtenerUsuarios();
		foreach ($usuarios as $u) {
			if ($nick == $u->getNick()) {
				$this->form_validation->set_message('validarNick','El nombre de inicio de sesión '.$nick.' ya esta registrado');
				return FALSE;
			}
		}
				return TRUE;
	}
}