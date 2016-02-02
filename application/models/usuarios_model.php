<?php

require_once(APPPATH."models/Entidades/Entradas.php");

class Usuarios_model extends CI_Model {

    var $em;
     
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
    
  //--------------------------------    
        
  function get_entradas(){    
     return $this->em->getRepository('Entradas')->findAll();    
  }    

  function set_entradas(){    
     $ent = new Entradas;
     $ent->setTitulo('prueba1');
     $ent->setContenido('otro 7');   
     $this->em->persist($ent);
     $this->em->flush();
  }    
  //------------------------------
  
}