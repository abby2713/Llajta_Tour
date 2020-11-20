<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_usuario extends CI_Model {

    public function get()
    {
    $this->db->from('usuario');
    $this->db->where('estado',1);
    $query = $this->db->get();
    return $query->result();
    }
    public function insert($data)
    {
    $this->db->insert('usuario',$data);
    return TRUE;
    }
    public function update($data,$kondisi)
    {
    $this->db->update('usuario',$data,$kondisi);
    return TRUE;
    }
    
    public function get_by_id($kondisi)
    {
    $this->db->from('usuario');
    $this->db->where($kondisi);
    $query = $this->db->get();
    return $query->row();
    }
    public function EliminarContacto($idUsuario,$data)
    {
    $this->db->WHERE('idUsuario',$idUsuario);
    $this->db->UPDATE('usuario',$data);
    }

}

/* End of file M_usuario.php */


/* End of file M_usuario.php */

?>