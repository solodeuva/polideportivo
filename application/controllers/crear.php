<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Crear extends CI_Controller {

    public function __construct(){
        parent::__construct();         
            $this->load->model('entradas_model');        
    }
    
    //--------------------------------

    public function index()
    {        
        $data['titulo'] = 'CodeIgniter 3 + Doctrine 2.3.3 ';        
        $data['entradas'] = $this->entradas_model->get_entradas();
        
        $this->load->view('entradas_view', $data);         
    }
    
    //--------------------------------------
    
    public function crear_entidades()
    {  
        // Después de crear las entidades comentamos
        $this->doctrine->generate_classes();  
        echo "hecho"; 
    }
    
    public function ingresar(){
        $this->entradas_model->set_entradas();
        echo "hecho";
    }
}