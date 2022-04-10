<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();

    
       
    }

	public function selPerfil()
	{  
        $query = $this->db->query("SELECT * FROM perfil");
        return $query->result();
	}

	public function post_datos($per_id,$usu_nombres,$usu_apellidos,$usu_correo,$usu_telefono)
    {
        return $this->db->query("INSERT INTO usuario (per_id,usu_nombres,usu_apellidos,usu_correo,usu_telefono) VALUES ('$per_id','$usu_nombres','$usu_apellidos','$usu_correo','$usu_telefono')");
       
       
    }
    public function selusuario()
	{  
        $query = $this->db->query("SELECT * FROM usuario");
        return $query->result();
	}
	
}