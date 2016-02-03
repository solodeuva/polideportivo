<?php

require_once(APPPATH."models/Entidades/Entradas.php");

class Usuarios_model extends CI_Model {

    var $em;
     
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
    
  //--------------------------------    
        
  function validar_credenciales($usuario,$contrasena){    
    $this->db->select('contrasena');
    $this->db->from('usuario');
    $this->db->where('user', $usuario);
    $hash = $this->db->get()->row('contrasena');
    if (md5($contrasena) == $hash) {
      return TRUE;
    }
    else{
      return FALSE;
    }  
  }    

  function getUser($usuario){    
    $this->db->from('usuario');
    $this->db->where('user', $usuario);
    return $this->db->get()->row();
  }    
  //------------------------------
  
}