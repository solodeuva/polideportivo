<?php #Programado por: Oscar René Merino 

require_once(APPPATH."models/Entidades/Alumno.php");

class Alumnos_model extends CI_Model {

    var $em;
     
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
  
  function crearAlumno($data){
    $this->load->model('nivel_model');
    $alumno = new Alumno;
    $alumno->setNombres($data['nombre']);
    $alumno->setApellidos($data['apellido']);
    $alumno->setGenero($data['genero']);
    $alumno->setFechaNacimiento($data['fnacimiento']);
    $alumno->setEstatura($data['estatura']);
    $alumno->setPeso($data['peso']);
    $alumno->setDireccion($data['dir']);
    $alumno->setTelefono($data['tel']);
    $alumno->setNombreMadre($data['madre']);
    $alumno->setDuiMadre($data['duim']);
    $alumno->setTrabajoMadre($data['tbjm']);
    $alumno->setTelMadre($data['telm']);
    $alumno->setNombrePadre($data['padre']);
    $alumno->setDuiPadre($data['duip']);
    $alumno->setTrabajoPadre($data['tbjp']);
    $alumno->setTelPadre($data['telp']);
    $alumno->setNombreResp($data['resp']);
    $alumno->setDuiResp($data['duir']);
    $alumno->setTrabajoResp($data['tbjr']);
    $alumno->setTelResp($data['telr']);
    $alumno->setExpPrevia($data['exp']);
    $alumno->setPadecimientos($data['padecimiento']);
    $alumno->setMedicamentos($data['medic']);
    $alumno->setEstado($data['estado']);
    $alumno->setIdNivel($this->nivel_model->getNivel($data('nivel')));//corroborar
    $this->em->persist($alumno);
    $this->em->flush();
  }

  function obtenerAlumnos(){
    return $this->em->getRepository('Alumno')->findAll();
  }

  function actualizarAlumno($data,$id){
    $this->load->model('nivel_model');
    $alumno = $this->em->getRepository('Alumno')->find($id);
    $alumno->setNombres($data['nombre']);
    $alumno->setApellidos($data['apellido']);
    $alumno->setGenero($data['genero']);
    $alumno->setFechaNacimiento($data['fnacimiento']);
    $alumno->setEstatura($data['estatura']);
    $alumno->setPeso($data['peso']);
    $alumno->setDireccion($data['dir']);
    $alumno->setTelefono($data['tel']);
    $alumno->setNombreMadre($data['madre']);
    $alumno->setDuiMadre($data['duim']);
    $alumno->setTrabajoMadre($data['tbjm']);
    $alumno->setTelMadre($data['telm']);
    $alumno->setNombrePadre($data['padre']);
    $alumno->setDuiPadre($data['duip']);
    $alumno->setTrabajoPadre($data['tbjp']);
    $alumno->setTelPadre($data['telp']);
    $alumno->setNombreResp($data['resp']);
    $alumno->setDuiResp($data['duir']);
    $alumno->setTrabajoResp($data['tbjr']);
    $alumno->setTelResp($data['telr']);
    $alumno->setExpPrevia($data['exp']);
    $alumno->setPadecimientos($data['padecimiento']);
    $alumno->setMedicamentos($data['medic']);
    $alumno->setEstado($data['estado']);
    $alumno->setIdNivel($this->nivel_model->getNivel($data('nivel')));//corroborar
    $this->em->persist($alumno);
    $this->em->flush();
  }

  function getAlumno($id){
    return $this->em->getRepository('Alumno')->find($id);
  }

  function borrarAlumno($id){
    $alumno = $this->em->getRepository('Alumno')->find($id);
    $this->em->remove($nivel);
    $this->em->flush();
  }
}