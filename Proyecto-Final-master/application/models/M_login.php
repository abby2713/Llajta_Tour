<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($usuario,$password)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where(array('usuario'=>$usuario,
                               'password'=>$password));
        $query=$this->db->get();
        return $query->row();
    }

    
    
    

}

/* End of file M_login.php */

?>