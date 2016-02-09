<?php

require_once(APPPATH."models/Entidades/Usuario.php");
require_once(APPPATH."models/Entidades/TipoUsuario.php");

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
    $this->db->where('nick', $usuario);
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
    $this->db->where('nick', $usuario);
    return $this->db->get()->row();
  }    
  //------------------------------
  
  function crearUsuario($data){
    $usuario = new Usuario;
    $usuario->setNombres($data['nombres']);
    $usuario->setApellidos($data['apellidos']);
    $usuario->setNick($data['nick']);
    $usuario->setContrasena($data['contrasena']);
    $usuario->setIdTipoUsuario($this->em->getRepository('TipoUsuario')->find('2'));
    $this->em->persist($usuario);
    $this->em->flush();
  }

  function obtenerUsuarios(){
    return $this->em->getRepository('Usuario')->findAll();
  }

  function actualizarUsuario($data,$id){
    $usuario = $this->em->getRepository('Usuario')->find($id);
    $usuario->setNombres($data['nombres']);
    $usuario->setApellidos($data['apellidos']);
    $usuario->setNick($data['nick']);
    $usuario->setContrasena($data['contrasena']);
    $this->em->persist($usuario);
    $this->em->flush();
  }

  function getUsuario($id){
    return $this->em->getRepository('Usuario')->find($id);
  }

  function borrarUsuario($id){
    $usuario = $this->em->getRepository('Usuario')->find($id);
    $this->em->remove($usuario);
    $this->em->flush();
  }
}