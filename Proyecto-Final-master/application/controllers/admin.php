<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


   public function __construct()
   {
   parent::__construct();
   $this->load->model('M_usuario');
   $this->load->model('M_parque');
   $this->load->library('upload');
    ;
   }
    public function index()
    {
        $this->load->view('admin/header_admin');
        $this->load->view('admin/v_admin');
        $this->load->view('admin/footer_admin');
        
    }

    public function usuario()
    {
        $this->load->view('admin/header_admin');
        $data['data']=$this->M_usuario->get();
        $this->load->view('admin/usuario/v_usuario',$data);
        $this->load->view('admin/footer_admin');
    }

    
    public function insertdata()
    {
    $nombre   = $this->input->post('nombre');
    $primerApellido = $this->input->post('primerApellido');
    $segundoApellido = $this->input->post('segundoApellido');
    $email = $this->input->post('email');
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
    'primerApellido'     => $primerApellido,
    'segundoApellido'     => $segundoApellido,
    'email'     => $email,
    );
    $this->M_usuario->insert($data);
    
    redirect('admin/usuario','refresh');
    }else {
    die("subida fallida");
    }
    }else {
    echo "no entra";
    }
    }

    public function edit($idUsuario)
    {
        $this->load->view('admin/header_admin');
    $kondisi = array('idUsuario' => $idUsuario );
    $data['data'] = $this->M_usuario->get_by_id($kondisi);
    return $this->load->view('admin/usuario/v_updateUsuario',$data);
    $this->load->view('admin/footer_admin');
    }
    public function updatedata()
    {
    $idUsuario   = $this->input->post('idUsuario');
    $nombre = $this->input->post('nombre');
    $primerApellido = $this->input->post('primerApellido');
    $segundoApellido = $this->input->post('segundoApellido');
    $email = $this->input->post('email');
    
    $path = './assets/picture/';
    
    $kondisi = array('idUsuario' => $idUsuario );
    
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
    'primerApellido'     => $primerApellido,
    'segundoApellido'     => $segundoApellido,
    'email'     => $email,
    );
    // hapus foto pada direktori
    @unlink($path.$this->input->post('filelama'));
    
    $this->M_usuario->update($data,$kondisi);
    return redirect('admin/usuario'); //REDIRECCIONANDO EL UPDATE
    }else {
    die("subida fallida");
    }
    }else {
    echo "al menos lo intentaste";
    }
    }

    public function EliminarContacto()
    {
    $idUsuario=$_POST['idUsuario'];
    $data['estado']=0;
    $this->M_usuario->EliminarContacto($idUsuario, $data);
    redirect(base_url('admin/usuario'),'refresh');
    }


    public function parque()
    {
        $this->load->view('admin/header_admin');
        $data['data']=$this->M_parque->get();
        $this->load->view('admin/turisticos/v_parque',$data);
        $this->load->view('admin/footer_admin');
    }



    // SUBIENDO EL PDF
    public function listaUsuarioPdf()
    {
        $this->load->library('pdf');
        $lista = $this->Model_login->retornarRegistro();
        $lista = $lista->result();
        $this->pdf = new pdf();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial', 'B', 9);
        $this->pdf->Cell(30, 10, 'NOMBRE',);
        $this->pdf->Cell(30, 10, 'USUARIO',);
        $this->pdf->Cell(30, 10, 'PASSWORD',);

        $this->pdf->Ln(10);

        foreach ($lista as $row) {
            $nombre = $row->nombre;
            $usuario = $row->usuario;
            $password = $row->password;
           
            $this->pdf->Cell(30, 10, $nombre);
            $this->pdf->Cell(30, 10, $usuario);
            $this->pdf->Cell(30, 10, $password);
           
            $this->pdf->Ln(10);
        }
        $this->pdf->Output('listaDeUsuario  .pdf', 'I');
    }
    public function agregar()
    {
        $this->load->view('header_admin');

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('usuario', 'usuario', 'required',   array('required' => 'Debe indicar %s.'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('agregarformRegistro');
        } else {
            $this->load->view('form_completado');
        }
        $this->load->view('footer_admin');
    }
    public function agregardb()
    {
        $nombre = $_POST['nombre'];
        $data['nombre'] = $nombre;  //importante agregar los atributos

        $usuario = $_POST['usuario'];
        $data['usuario'] = $usuario;

        $password = $_POST['password'];
        $data['password'] = $password;

        $apellido = $_POST['apellido'];
        $data['apellido'] = $apellido;

        $email = $_POST['email'];
        $data['email'] = $email;

        $this->Model_login->agregarUsuario($data);
        $this->load->view('header_admin');
        redirect(base_url('admin/SelectUsuario'), 'refresh');
        $this->load->view('footer_admin');
    }

    public function modificar()
    {
        $id = $_POST['id'];
        $data['usuario'] = $this->Model_login->recuperarUsuario($id);
        $this->load->view('header_admin');
        $this->load->view('modificarUsuarioform', $data);
        $this->load->view('footer_admin');
    }
    public function modificardb()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $data['nombre'] = $nombre;

        $usuario = $_POST['usuario'];
        $data['usuario'] = $usuario;

        $password = $_POST['password'];
        $data['password'] = $password;

     

        $this->Model_login->modificarlogin($id, $data);
        $this->load->view('header_admin');
        redirect(base_url('home/selectCrud'), 'refresh');
        $this->load->view('footer_admin');
    }

    // NUESTRO CONTROLADOR PARA ELIMINAR
    public function eliminardb()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $data['nombre'] = $nombre;
        $this->Model_login->eliminarLogin($id);
        $this->load->view('header_admin');
        redirect(base_url('home/selectCrud'), 'refresh');
        $this->load->view('footer_admin');
    }


}
