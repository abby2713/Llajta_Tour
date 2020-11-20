<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
         $this->load->model('M_login');
         
    }
    public function index()
    {
        $valid=$this->form_validation;
        $valid->set_rules('usuario', 'usuario','required',array('required'=> '%s Ingrese el usuario'));
        $valid->set_rules('password', 'password','required',array('required'=> '%s Ingrese la contraseña'));

        if ($valid->run()) {
            
            $usuario=$this->input->post('usuario');
            $password=$this->input->post('password');
            //prosess ke simple_login

            $this->simple_login->login($usuario, $password);
        }

        $data = array('TITLE' => 'login');
        $this->load->view('v_login', $data, FALSE);
        
    }
    public function logout()
    {
        $this->simple_login->logout();
    }

}

/* End of file Login.php */

?>