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
			$this->load->library('form_validation');

			//definiendo etiquetas donde se mostraran los errores en la vista
			$this->form_validation->set_error_delimiters('<div class="div-error">','</div>');

			if($this->form_validation->run() == FALSE){
				$this->load->model('nivel_model');
				$data['nivel'] = $this->nivel_model->obtenerNiveles();
				$this->load->helper('form');
				$this->load->view('plantillas/header');
				$this->load->view('plantillas/sidebar');
				$this->load->view('front_end/agregar_alumno',$data);
				$this->load->view('plantillas/footer');
			}
			else{

				$fecha = explode('-',$this->input->post('fnacimiento'), 3);
				$fecha2 = $fecha[2]."/".$fecha[1]."/".$fecha[0];
				$data = array(
					'nombres' 		=> mb_strtoupper($this->input->post('nombres')),
					'apellidos' 	=> mb_strtoupper($this->input->post('apellidos')),
					'estatura' 		=> $this->input->post('estatura'),
					'peso' 			=> $this->input->post('peso'),
					'fnacimiento' 	=> $fecha2,
					'genero' 		=> $this->input->post('genero'),
					'dir' 			=> $this->input->post('dir'),
					'tel' 			=> $this->input->post('tel')."-".$this->input->post('tel2'), //concatenando cadenas
					'exp' 			=> $this->input->post('exp'),
					'nivel' 		=> $this->input->post('nivel'),
					'madre' 		=> mb_strtoupper($this->input->post('madre')),
					'duim' 			=> $this->input->post('duim')."-".$this->input->post('duim2'), //concatenando cadenas
					'tbjm' 			=> $this->input->post('tbjm'),
					'telm' 			=> $this->input->post('telm')."-".$this->input->post('telm2'), //concatenando cadenas
					'padre' 		=> mb_strtoupper($this->input->post('padre')),
					'duip' 			=> $this->input->post('duip')."-".$this->input->post('duip2'), 
					'tbjp' 			=> $this->input->post('tbjp'),
					'telp' 			=> $this->input->post('telp')."-".$this->input->post('telp2'),
					'resp' 			=> mb_strtoupper($this->input->post('resp')),
					'duir' 			=> $this->input->post('duir')."-".$this->input->post('duir2'),
					'tbjr' 			=> $this->input->post('tbjr'),
					'telr' 			=> $this->input->post('telr')."-".$this->input->post('telr2'),
					'padecimiento' 	=> $this->input->post('padecimiento'),
					'medic' 		=> $this->input->post('medic')
					);
					$this->alumnos_model->crearAlumno($data);
					redirect(base_url('Alumnos/gestionarAlumnos'));
			}
		}

		public function buscarAlumnos(){ 				#esta funcion solo desplegara una vista con opciones de busqueda de alumnos
			$this->load->model('nivel_model');
			$data['nivel'] = $this->nivel_model->obtenerNiveles();
			$data['alumnos'] = $this->alumnos_model->obtenerAlumnosNivel(1);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/buscar_alumnos',$data);
			$this->load->view('plantillas/footer');
		}	

		public function buscarPorNivel2(){
			$nivel = $this->input->post('nivel');
			redirect(base_url('alumnos/buscarPorNivel/'.$nivel));
		}

		public function buscarPorNivel($nivel){
			$data['alumnos'] = $this->alumnos_model->obtenerAlumnosNivel($nivel);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/ver_alumnos',$data);
			$this->load->view('plantillas/footer');
		}

		public function buscarPorGenero2(){
			$genero = $this->input->post('genero');
			if($genero == 'M'){
				$gen = 1;
			}
			else
			{
				$gen = 2;
			}
			redirect(base_url('alumnos/buscarPorGenero/'.$gen));
		}

		public function buscarPorGenero($genero){
			if($genero == 1){
				$genero = 'M';
			}
			else{
				$genero = 'F';
			}
			$data['alumnos'] = $this->alumnos_model->obtenerAlumnosGenero($genero);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/ver_alumnos',$data);
			$this->load->view('plantillas/footer');
		}

		public function buscarPorNombres2(){
			$this->session->set_tempdata('name', mb_strtoupper($this->input->post('nombres')), 300);
			redirect(base_url('alumnos/buscarPorNombres'));
		}

		public function buscarPorNombres(){
			$nombres = $_SESSION['name'];
			$data['alumnos'] = $this->alumnos_model->obtenerAlumnosNombres($nombres);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/ver_alumnos',$data);
			$this->load->view('plantillas/footer');
		}

		public function buscarPorApellidos2(){
			$this->session->set_tempdata('last_name', mb_strtoupper($this->input->post('apellidos')), 300);
			redirect(base_url('alumnos/buscarPorApellidos'));
		}

		public function buscarPorApellidos(){
			$nombres = $_SESSION['last_name'];
			$data['alumnos'] = $this->alumnos_model->obtenerAlumnosApellidos($nombres);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/ver_alumnos',$data);
			$this->load->view('plantillas/footer');
		}

		public function buscarTodos2(){
			redirect(base_url('alumnos/buscarTodos'));
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
		
		public function verAlumno($id){ #Funcion encargada de mostrar la ficha o perfil del alumno
			$data['error'] = '';
			$data['alumno'] = $this->alumnos_model->getAlumno($id);
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/ficha_alumno',$data);
			$this->load->view('plantillas/footer');
		}

		public function actualizarAlumno(){
			$this->load->library('form_validation');
			$id = $this->input->post('id');

			//definiendo etiquetas donde se mostraran los errores en la vista
			$this->form_validation->set_error_delimiters('<div class="div-error">','</div>');

			if($this->form_validation->run() == FALSE){
				$this->load->model('nivel_model');
				$data['nivel'] = $this->nivel_model->obtenerNiveles();
				$data['alumno'] = $this->alumnos_model->getAlumno($id);
				$this->load->view('plantillas/header');
				$this->load->view('plantillas/sidebar');
				$this->load->view('front_end/editar_alumno_error',$data);
				$this->load->view('plantillas/footer');
			}
			else{
			$fecha = explode('-',$this->input->post('fnacimiento'), 3);
			$fecha2 = $fecha[2]."/".$fecha[1]."/".$fecha[0];
			$data = array(
				'nombres' 		=> strtoupper($this->input->post('nombres')),
				'apellidos' 	=> strtoupper($this->input->post('apellidos')),
				'estatura' 		=> $this->input->post('estatura'),
				'peso' 			=> $this->input->post('peso'),
				'fnacimiento' 	=> $fecha2,
				'genero' 		=> $this->input->post('genero'),		
				'dir' 			=> $this->input->post('dir'),
				'tel' 			=> $this->input->post('tel')."-".$this->input->post('tel2'),
				'exp' 			=> $this->input->post('exp'),
				'nivel' 		=> $this->input->post('nivel'),
				'madre' 		=> mb_strtoupper($this->input->post('madre')),
				'duim' 			=> $this->input->post('duim')."-".$this->input->post('duim2'),
				'tbjm' 			=> $this->input->post('tbjm'),
				'telm' 			=> $this->input->post('telm')."-".$this->input->post('telm2'),
				'padre' 		=> mb_strtoupper($this->input->post('padre')),
				'duip' 			=> $this->input->post('duip')."-".$this->input->post('duip2'),
				'tbjp' 			=> $this->input->post('tbjp'),
				'telp' 			=> $this->input->post('telp')."-".$this->input->post('telp2'),
				'resp' 			=> mb_strtoupper($this->input->post('resp')),
				'duir' 			=> $this->input->post('duir')."-".$this->input->post('"duir2'),
				'tbjr' 			=> $this->input->post('tbjr'),
				'telr' 			=> $this->input->post('telr')."-".$this->input->post('telr2'),
				'padecimiento' 	=> $this->input->post('padecimiento'),
				'medic' 		=> $this->input->post('medic'),
				'estado'		=> $this->input->post('estado')
				);
			$this->alumnos_model->actualizarAlumno($data,$id);
			redirect(base_url('Alumnos/gestionarAlumnos'));
			}
		}

		public function actualizarEstado($id){
			$this->alumnos_model->actualizarEstado($id);
			redirect(base_url('Alumnos/buscarAlumnos'));
		}

		public function eliminarAlumno($id){
			if(isset($_SESSION['logged_in'])){
				$this->alumnos_model->borrarAlumno($id);
				$imagen = './assets/uploads/alumnos/'.$id.'.png';
				if (file_exists($imagen)) {
					unlink($imagen);
		        }
				redirect(base_url('Alumnos/buscarAlumnos'));
			}
			else{
				$this->load->view('plantillas/header');
				$this->load->view('plantillas/sidebar');
				$this->load->view('front_end/error_sesion');
				$this->load->view('plantillas/footer');
			}
		}

		public function verReporte(){
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/reporte_alumno');
			$this->load->view('plantillas/footer');
		}

		public function verReportePastel(){
			$this->load->model('nivel_model');
			$data['alumpornivel'] = $this->nivel_model->alumnosPorNivel();
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/reporte_alumno_pie',$data);
			$this->load->view('plantillas/footer');
		}
		public function verReporteBarras(){
			$this->load->model('nivel_model');
			$data['alumpornivel'] = $this->nivel_model->alumnosPorNivel();
			$this->load->view('plantillas/header');
			$this->load->view('plantillas/sidebar');
			$this->load->view('front_end/reporte_alumno_barras',$data);
			$this->load->view('plantillas/footer');
		}
		
		public function generarReportePastel(){
			$this->load->model('nivel_model');
			$alumPorNivel = $this->nivel_model->alumnosPorNivel();
			require_once(APPPATH."libraries/jpgraph/jpgraph.php");
			require_once(APPPATH."libraries/jpgraph/jpgraph_pie.php");
			require_once(APPPATH."libraries/jpgraph/jpgraph_pie3d.php");


			// Pasando el nombre de los niveles a un arreglo llamado dato
			$i = 0;
			foreach ($alumPorNivel->result() as $a) {
				$dato[$i] 	= $a->nombre;
				$cuenta[] = $a->total;
				$exp[$i] 	= 5;
				$i++;
			}

			// Creando el Grafico de Pastel
			$graph = new PieGraph(550,400);
			$graph->SetShadow();

			// Estableciendo el titulo
			$graph->title->Set("Porcentaje de Alumnos por Nivel");
			$graph->title->SetFont(FF_VERDANA,FS_BOLD,18); 
			$graph->title->SetColor("darkblue");
			$graph->legend->Pos(0.3,0.06);

			// Crear 3D pie plot
			$p1 = new PiePlot3d($cuenta);
			$p1->SetTheme("sand");
			$p1->SetCenter(0.5);
			$p1->SetSize(0.5);
			$p1->SetHeight(20); #Ancho del pastel

			// Angulo de inclinación
			$p1->SetAngle(45);

			// Distancia entre las partes del pastel
			$p1->Explode($exp);

			$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);
			$p1->SetLegends($dato);
			$graph->Add($p1);

			$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
			 
			// Guardando imagen como archivo por default es .png
			$fileName = "assets/img/reportes/reporte.jpg";
			$graph->img->Stream($fileName);

			redirect(base_url('Alumnos/verReportePastel'));
		}

		public function generarReporteBarras(){
			$this->load->model('nivel_model');
			$alumPorNivel = $this->nivel_model->alumnosPorNivel();
			require_once(APPPATH."libraries/jpgraph/jpgraph.php");
			require_once(APPPATH."libraries/jpgraph/jpgraph_line.php");
			require_once(APPPATH."libraries/jpgraph/jpgraph_bar.php");

			$i = 0;
			foreach ($alumPorNivel->result() as $a) {
				$niveles[$i] 	= $a->nombre;
				$cuenta[] = $a->total;
				$i++;
			}
			 
			//Instancia del objeto del tipo Graph en donde como parametro
			// se le pasan los valore de ancho y altura
			$grafica = new Graph(700,440);
			$grafica->SetScale("textlin");
			 
			$grafica->SetBox(false);
			//Nombre de las columnas
			$columnas = $niveles;
			$grafica->xaxis->SetTickLabels($niveles);
			 
			//Objeto del tipo BarPlot que se le enviara a la grafica y el cual
			//recibe como parametros los datos a graficar
			$barras = new BarPlot($cuenta);
			 
			$grafica->Add($barras);
			//Color de los bordes 
			 
			//Color de borde de las barras
			$barras->SetColor("white");
			//Color de relleno de las barras
			$barras->SetFillColor("#653306");
			//Ancho de las barras
			$barras->SetWidth(45);
			 
			$grafica->title->Set("Número de Alumnos por Nivel");
			$grafica->xaxis->title->Set("Niveles");
			$grafica->yaxis->title->Set("Alumnos");
			$grafica->title->SetFont(FF_TIMES,FS_ITALIC,18);
			
			$gdImgHandler = $grafica->Stroke(_IMG_HANDLER);
			 
			// Guardando imagen como archivo por default es .png
			$fileName = "assets/img/reportes/reportebarra.jpg";
			$grafica->img->Stream($fileName);

			redirect(base_url('Alumnos/verReporteBarras'));
		}

		public function do_upload(){
			$id = $this->input->post('id');
			$config['upload_path']          = './assets/uploads/alumnos/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['file_name']			= $id.'.png';
	        $config['overwrite']			= TRUE;
	        $config['max_size']             = 0;
	        $config['max_width']            = 400;
	        $config['max_height']           = 533;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('userfile'))
	                {
	                        $data['error'] 			= $this->upload->display_errors();
	                        $data['alumno'] = $this->alumnos_model->getAlumno($id);
							$this->load->view('plantillas/header');
							$this->load->view('plantillas/sidebar');
							$this->load->view('front_end/ficha_alumno',$data);
							$this->load->view('plantillas/footer');

	                }
	                else
	                {
	                        $data['error'] 			= '';
							$data['alumno'] = $this->alumnos_model->getAlumno($id);
							$this->load->view('plantillas/header');
							$this->load->view('plantillas/sidebar');
							$this->load->view('front_end/ficha_alumno',$data);
							$this->load->view('plantillas/footer');
	                }
		}

		public function validarDir(){  //verifica si el directorio para el docente logueado existe
			$dir = './assets/uploads/alumnos/1.png';
			if (file_exists($dir)) {
				unlink($dir);
	           	echo "Borrado";
	        }
	        else{
	        	echo "FALSE";
	        }
		}
}