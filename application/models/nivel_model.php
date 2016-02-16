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
  /*
  function contarNiveles(){ #funcion con query builder porque con doctrine me devolvia un array 
    $query = $this->db->query('select * from nivel');
    return $query->num_rows();
  }
  */
  function alumnosPorNivel(){
    $select =   array(
                'nivel.nombre',
                'count(alumno.nombres) as Total',
                'nivel.instructor'
            ); 
    $this->db->select($select)
              ->from('alumno')
              ->join('nivel','alumno.id_nivel = nivel.id_nivel','right')
              ->group_by('nivel.nombre,nivel.instructor')
              ->order_by('nivel.nombre');
    $query = $this->db->get();
    if($query->num_rows() > 0) return $query;
    else return false;
  }
}