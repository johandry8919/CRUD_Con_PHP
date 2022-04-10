<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plantilla extends CI_Controller {
    function __construct() {
        parent::__construct();
    
       
    }

	
	public function index()
	{   $titulo['titulo']="mi paghina en crud echo con bootstrap";
		$this->load->view('plantilla', $titulo);
	}

	
}