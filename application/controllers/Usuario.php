
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_usuario');
       
    }


	public function index()

	{
       $data['selPerfil'] = $this->Model_usuario->selPerfil();
       $usuario['usuarios'] = $this->Model_usuario->selusuario();

        $this->load->view('plantilla');
		$this->load->view('usuario/index', $data);
	}
    public function registro(){
       $datos = $this->input->post();
       if($datos){
           $teextid = $datos['teextid'];
           $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $correo = $datos['correo'];
            $telefono = $datos['telefono'];
            $result =$this->Model_usuario->post_datos($teextid,$nombre,$apellido,$correo,$telefono);
            $usuario['usuarios'] = $this->Model_usuario->selusuario();
            if($result){
               redirect('');
            }


       
}else{
    $this->index();
    echo "no se pudo registrar";
}
    
}
}



