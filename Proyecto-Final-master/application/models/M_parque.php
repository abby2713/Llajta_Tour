<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_parque extends CI_Model {

    public function get()
    {
    $this->db->from('parque');
    $this->db->where('estado',1);
    $query = $this->db->get();
    return $query->result();
    }

}

/* End of file M_parque.php */


?>