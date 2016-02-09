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
}