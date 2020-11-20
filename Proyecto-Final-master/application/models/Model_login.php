<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    function get_all_pics(){
		$all_pics = $this->db->get('login');
		return $all_pics->result();
	}

	// save picture data to db
	function store_pic_data($data){
		$insert_data['nombre'] = $data['nombre'];
		$insert_data['usuario'] = $data['usuario'];
		$insert_data['password'] = $data['password'];
		$insert_data['foto'] = $data['foto'];

		$query = $this->db->insert('login', $insert_data);
    }


    public function retornarRegistro() /*poner arriba*/
{
      $this->db->select('*');
    $this->db->from('login');
    return $this->db->get();
}

    public function agregarUsuario($data)
    {
    $this->db->insert('login',$data);
    }

    public function recuperarlogin ($id)
    {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('id',$id);
    return $this->db->get();
    }
    public function  modificarlogin($id,$data)
    {
    $this->db->where('id',$id);
    $this->db->update('login',$data);
    }

    public function eliminarLogin($id)
    {
    $this->db->where('id',$id);
    $this->db->delete('login');
    }

}

/* End of file Model_login.php */

?>