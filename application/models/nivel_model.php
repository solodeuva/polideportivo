<?php #Programado por: Oscar René Merino 

require_once(APPPATH."models/Entidades/Nivel.php");

class Nivel_model extends CI_Model {

    var $em;
     
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
  
  function crearNivel($data){
    $nivel = new Nivel;
    $nivel->setNombre($data['nombre']);
    $nivel->setInstructor($data['instructor']);
    $this->em->persist($nivel);
    $this->em->flush();
  }

  function obtenerNiveles(){
    return $this->em->getRepository('Nivel')->findAll();
  }

  function actualizarNivel($data,$id){
    $nivel = $this->em->getRepository('Nivel')->find($id);
    $nivel->setNombre($data['nombre']);
    $nivel->setInstructor($data['instructor']);
    $this->em->persist($nivel);
    $this->em->flush();
  }

  function getNivel($id){
    return $this->em->getRepository('Nivel')->find($id);
  }

  function borrarNivel($id){
    $nivel = $this->em->getRepository('Nivel')->find($id);
    $this->em->remove($nivel);
    $this->em->flush();
  }

  function contarNiveles(){ #funcion con query builder porque con doctrine me devolvia un array 
    $query = $this->db->query('select * from nivel');
    return $query->num_rows();
  }

  function alumnosPorNivel(){
    $query = $this->db->query('select count(a.nombres) as cuenta,n.nombre from alumno a right join nivel n on a.id_nivel = n.id_nivel group by n.nombre');
    return $query->num_rows();
  }
}