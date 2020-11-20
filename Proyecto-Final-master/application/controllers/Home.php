<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('v_inicio');
        $this->load->view('footer');
        
    }

    public function selectCrud()
    {
        $this->load->view('header_admin');
        $data['login']=$this->Model_login->retornarRegistro();
        $this->load->view('admin_crud',$data);
        $this->load->view('footer_admin');
    }

    public function agregar()
    {
    $this->load->view('header_admin');
    $this->load->view('agregarform');
    $this->load->view('footer_admin');
    }
    public function agregardb()
    {
    $nombre=$_POST['nombre'];
    $data['nombre']=$nombre;
    $this->Model_login->agregarLogin($data);
    $this->load->view('header');
    $this->load->view('agregarmensaje',$data);
    $this->load->view('footer');
    }

    public function modificar()
    {
    $id=$_POST['id'];
    $data['login']=$this->Model_login->recuperarlogin($id);
    $this->load->view('header_admin');
    $this->load->view('modificarloginform',$data);
    $this->load->view('footer_admin');
    }
    public function modificardb()
    {
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $data['nombre']=$nombre;
    $this->Model_login->modificarlogin($id,$data);
    $this->load->view('head');
    $this->load->view('modificarloginmensaje',$data);
    $this->load->view('footer');
    }

    public function deletedata($id,$foto)
    {
        $path = './assets/picture/';
        @unlink($path.$foto);
  
        $where = array('id' => $id );
        $this->Model_login->delete($where);
        redirect('./Admin/Convocatoria/Convocatoria/','refresh');
    }

    	// ========================================================
	// 						REGISTRO FACEBOOK 
    //      ========================================================
    
    public function usuario()
    {
        $data['data']=$this->M_usuario->get();
        $this->load->view('v_admin', $data);
    }

    public function tambah()
    {
    $this->load->view('v_admin');
    }
    public function insertdata()
    {
    $nombre   = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');
    $cedula = $this->input->post('cedula');
    $edad = $this->input->post('edad');
     // get foto
    $config['upload_path'] = './assets/picture';
    $config['allowed_types'] = 'jpg|png|jpeg|gif';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotopost']['name'];
    
    $this->upload->initialize($config);
    
    if (!empty($_FILES['fotopost']['name'])) {
    if ( $this->upload->do_upload('fotopost') ) {
    $foto = $this->upload->data();
    $data = array(
    'nombre'       => $nombre,
    'foto'       => $foto['file_name'],
    'apellido'     => $apellido,
    'cedula'     => $cedula,
    'edad'     => $edad,
    );
    $this->M_persona->insert($data);
    
    redirect('home/','refresh');
    }else {
    die("subida fallida");
    }
    }else {
    echo "no entra";
    }
    }

}




/* End of file Home.php */

?>