<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('alumnos_model');
		$this->load->helper('form');
	}

	public function gestionarAlumnos(){
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/gestionar_alumnos');
		$this->load->view('plantillas/footer');
	}

	public function registrarAlumno()
	{
		$this->load->model('nivel_model');
		$data['nivel'] = $this->nivel_model->obtenerNiveles();
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/agregar_alumno',$data);
		$this->load->view('plantillas/footer');
	}

	public function agregarAlumno(){
		$data = array(
			'nombres' 		=> $this->input->post('nombres'),
			'apellidos' 	=> $this->input->post('apellidos'),
			'estatura' 		=> $this->input->post('estatura'),
			'peso' 			=> $this->input->post('peso'),
			'fnacimiento' 	=> $this->input->post('fnacimiento'),
			'genero' 		=> $this->input->post('genero'),		
			'dir' 			=> $this->input->post('dir'),
			'tel' 			=> $this->input->post('tel'),
			'exp' 			=> $this->input->post('exp'),
			'nivel' 		=> $this->input->post('nivel'),
			'madre' 		=> $this->input->post('madre'),
			'duim' 			=> $this->input->post('duim'),
			'tbjm' 			=> $this->input->post('tbjm'),
			'telm' 			=> $this->input->post('telm'),
			'padre' 		=> $this->input->post('padre'),
			'duip' 			=> $this->input->post('duip'),
			'tbjp' 			=> $this->input->post('tbjp'),
			'telp' 			=> $this->input->post('telp'),
			'resp' 			=> $this->input->post('resp'),
			'duir' 			=> $this->input->post('duir'),
			'tbjr' 			=> $this->input->post('tbjr'),
			'telr' 			=> $this->input->post('telr'),
			'padecimiento' 	=> $this->input->post('padecimiento'),
			'medic' 		=> $this->input->post('medic')
			);
		$this->alumnos_model->crearAlumno($data);
		redirect(base_url('Alumnos/gestionarAlumnos'));
	}

	public function buscarAlumnos(){ 				#esta funcion solo desplegara una vista con opciones de busqueda de alumnos
		$this->load->model('nivel_model');
		$data['nivel'] = $this->nivel_model->obtenerNiveles();
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/buscar_alumnos',$data);
		$this->load->view('plantillas/footer');
	}	

	public function buscarPorNivel(){
		$data['alumnos'] = $this->alumnos_model->obtenerAlumnosNivel($this->input->post('nivel'));
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_alumnos',$data);
		$this->load->view('plantillas/footer');
	}

	public function buscarPorGenero(){
		$data['alumnos'] = $this->alumnos_model->obtenerAlumnosGenero($this->input->post('genero'));
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_alumnos',$data);
		$this->load->view('plantillas/footer');
	}

	public function buscarPorNombres(){
		$data['alumnos'] = $this->alumnos_model->obtenerAlumnosNombres($this->input->post('nombres'));
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_alumnos',$data);
		$this->load->view('plantillas/footer');
	}

	public function buscarPorApellidos(){
		$data['alumnos'] = $this->alumnos_model->obtenerAlumnosApellidos($this->input->post('apellidos'));
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_alumnos',$data);
		$this->load->view('plantillas/footer');
	}

	public function buscarTodos(){
		$data['alumnos'] = $this->alumnos_model->obtenerAlumnos();
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ver_alumnos',$data);
		$this->load->view('plantillas/footer');
	}

	public function editarAlumno($id){
		$this->load->model('nivel_model');
		$data['nivel'] = $this->nivel_model->obtenerNiveles();
		$data['alumno'] = $this->alumnos_model->getAlumno($id);
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/editar_alumno',$data);
		$this->load->view('plantillas/footer');
	}
	/*
	public function verAlumno(){
		//$data['alumno']=$this->alumno_model->obtenerAlumnos();
		$this->load->helper('form');
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/ficha_alumno');
		$this->load->view('plantillas/footer');
	}

	public function actualizarAlumno(){
		$id = $this->input->post('id');
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'genero' => $this->input->post('genero'),
			'fnacimiento' => $this->input->post('fnacimiento'),
			'estatura' => $this->input->post('estatura'),
			'peso' => $this->input->post('peso'),
			'dir' => $this->input->post('dir'),
			'tel' => $this->input->post('tel'),
			'madre' => $this->input->post('madre'),
			'duim' => $this->input->post('duim'),
			'tbjm' => $this->input->post('tbjm'),
			'telm' => $this->input->post('telm'),
			'padre' => $this->input->post('padre'),
			'duip' => $this->input->post('duip'),
			'tbjp' => $this->input->post('tbjp'),
			'telp' => $this->input->post('telp'),
			'resp' => $this->input->post('resp'),
			'duir' => $this->input->post('duir'),
			'tbjr' => $this->input->post('tbjr'),
			'telr' => $this->input->post('telr'),
			'exp' => $this->input->post('exp'),
			'padecimiento' => $this->input->post('padecimiento'),
			'medic' => $this->input->post('medic'),
			'nombre' => $this->input->post('nombre'),
			'nivel' => $this->input->post('nivel')
			);
		$this->alumnos_model->actualizarAlumno($data,$id);
		redirect(base_url('Alumnos/gestionarAlumnos'));
	}
	*/
	public function eliminarAlumno($id){
		$this->alumnos_model->borrarAlumno($id);
		redirect(base_url('Alumnos/gestionarAlumnos'));
	}

	public function verReporte(){
		$this->load->model('nivel_model');
		$data['nivel'] = $this->nivel_model->contarNiveles();
		$data['niveles'] = $this->nivel_model->alumnosPorNivel();
		$this->load->view('plantillas/header');
		$this->load->view('plantillas/sidebar');
		$this->load->view('front_end/reporte_alumno',$data);
		$this->load->view('plantillas/footer');
	}
	public function generarReporte(){
		$this->load->model('nivel_model');
		$nivel = $this->nivel_model->obtenerNiveles();
		require_once(APPPATH."libraries/jpgraph/jpgraph.php");
		require_once(APPPATH."libraries/jpgraph/jpgraph_pie.php");
		require_once(APPPATH."libraries/jpgraph/jpgraph_pie3d.php");


		// Pasando el nombre de los niveles a un arreglo llamado nivel
		$i = 1;
		foreach ($nivel as $n) {
			$dato[$i] = $n->getNombre();
			$i++;
		}
		$data = array(20,27,45,75,90);

		// Creando el Grafico de Pastel
		$graph = new PieGraph(550,400);
		$graph->SetShadow();


		// Estableciendo el titulo
		$graph->title->Set("Porcentaje de Alumnos por Nivel");
		$graph->title->SetFont(FF_VERDANA,FS_BOLD,18); 
		$graph->title->SetColor("darkblue");
		$graph->legend->Pos(0.3,0.06);

		// Create 3D pie plot
		$p1 = new PiePlot3d($data);
		$p1->SetTheme("sand");
		$p1->SetCenter(0.5);
		$p1->SetSize(0.5);
		$p1->SetHeight(20); #Ancho del pastel

		// Angulo de inclinación
		$p1->SetAngle(45);

		// Distancia entre las partes del pastel
		$p1->Explode(array(5,5,5,5,5));

		// As a shortcut you can easily explode one numbered slice with
		// $p1->ExplodeSlice(3);

		$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);

		$p1->SetLegends($dato);


		$graph->Add($p1);
		$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
		 
		// Stroke image to a file and browser
		 
		// Default is PNG so use ".png" as suffix
		$fileName = "assets/img/reportes/reporte.png";
		$graph->img->Stream($fileName);
		 
		// Send it back to browser
		//$graph->img->Headers();
		//$graph->img->Stream();

		redirect(base_url('Alumnos/gestionarAlumnos'));
	}
}