<?php #Programado por: Oscar René Merino 

require_once(APPPATH."models/Entidades/Alumno.php");
require_once(APPPATH."models/Entidades/Nivel.php");

class Alumnos_model extends CI_Model {

    var $em;
     
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
  
  function crearAlumno($data){
    $this->load->model('nivel_model');
    $alumno = new Alumno;
    $alumno->setNombres($data['nombres']);
    $alumno->setApellidos($data['apellidos']);
    $alumno->setEstatura($data['estatura']);
    $alumno->setPeso($data['peso']);
    $alumno->setFechaNacimiento($data['fnacimiento']);
    $alumno->setGenero($data['genero']);
    $alumno->setDireccion($data['dir']);
    $alumno->setTelefono($data['tel']);
    $alumno->setExpPrevia($data['exp']);
    $alumno->setIdNivel($this->nivel_model->getNivel($data['nivel']));
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
    $alumno->setPadecimientos($data['padecimiento']);
    $alumno->setMedicamentos($data['medic']);
    $alumno->setEstado("A");
    $this->em->persist($alumno);
    $this->em->flush();
  }

  function obtenerAlumnosNivel($nivel){
    $query = $this->em->createQuery('SELECT a FROM Alumno a where a.idNivel = :nivel ORDER BY a.idAlumno');
    $query->setParameter('nivel', $nivel);
    $alumnos = $query->getResult();
    return $alumnos;
  }

  function obtenerAlumnosGenero($genero){
    $query = $this->em->createQuery('SELECT a FROM Alumno a where a.genero = :genero ORDER BY a.idNivel');
    $query->setParameter('genero', $genero);
    $alumnos = $query->getResult();
    return $alumnos;
  }

  function obtenerAlumnosNombres($nombres){ #obtiene alumnos por nombres o parte del nombre
    $query = $this->em->createQuery('SELECT a FROM Alumno a where a.nombres like :nombres ORDER BY a.idNivel');
    $query->setParameter('nombres', '%'.$nombres.'%');
    $alumnos = $query->getResult();
    return $alumnos;
  }

  function obtenerAlumnosApellidos($apellidos){ #obtenie alumnos por apellidos o parte del apellido
    $query = $this->em->createQuery('SELECT a FROM Alumno a where a.apellidos like :apellidos ORDER BY a.idNivel');
    $query->setParameter('apellidos', '%'.$apellidos.'%');
    $alumnos = $query->getResult();
    return $alumnos;
  }

   function obtenerAlumnos(){ #obteniendo todos los alumnos ordenados por nivel
    $query = $this->em->createQuery('SELECT a FROM Alumno a ORDER BY a.idNivel');
    $alumnos = $query->getResult();
    return $alumnos;
  }
  /*
  function obtenerAlumnos(){ #obteniendo todos los alumnos

    return $this->em->getRepository('Alumno')->findAll();
  }*/

  function getAlumno($id){
    return $this->em->getRepository('Alumno')->find($id);
  }

  function borrarAlumno($id){
    $alum = $this->em->getRepository('Alumno')->find($id);
    $this->em->remove($alum);
    $this->em->flush();
  }

  function actualizarAlumno($data,$id){
    $this->load->model('nivel_model');
    $alumno = $this->em->getRepository('Alumno')->find($id);
    $alumno->setNombres($data['nombres']);
    $alumno->setApellidos($data['apellidos']);
    $alumno->setEstatura($data['estatura']);
    $alumno->setPeso($data['peso']);
    $alumno->setFechaNacimiento($data['fnacimiento']);
    $alumno->setGenero($data['genero']);
    $alumno->setDireccion($data['dir']);
    $alumno->setTelefono($data['tel']);
    $alumno->setExpPrevia($data['exp']);
    $alumno->setIdNivel($this->nivel_model->getNivel($data['nivel']));
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
    $alumno->setPadecimientos($data['padecimiento']);
    $alumno->setMedicamentos($data['medic']);
    $alumno->setEstado($data['estado']);
    $this->em->persist($alumno);
    $this->em->flush();
  }
  
  function actualizarEstado($id){

    $alumno = $this->em->getRepository('Alumno')->find($id);
    if($alumno->getEstado() == 'A')
    $alumno->setEstado("B");
    else
    $alumno->setEstado("A");

    $this->em->persist($alumno);
    $this->em->flush();
  }
}