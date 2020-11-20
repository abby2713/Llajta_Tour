<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
    protected $CI;


    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('M_login');
        // $this->load->library('Simple_login');
        
    }
    //fungsi login
    public function login($usuario,$password)
    {
        //CAMBIAR m_login a M_login
        $check=$this->CI->M_login->login($usuario,$password);
//jika ada data login maka session login dibuat 

if ($check) {
    $id         = $check->id;
    $nombre       =$check->nombre;
    $usuario   =$check->usuario;
    //buat session
    $this->CI->session->set_userdata('id',$id);
    $this->CI->session->set_userdata('nombre',$nombre);
    $this->CI->session->set_userdata('usuario',$usuario);
    //redirect ke halaman admin
    
    redirect(base_url('admin/usuario'),'refresh');

}
else
{
     $this->CI->session->set_flashdata('warning', 'Contraseña y usuarios incorrectos');
     
     redirect(base_url('login'),'refresh');
}
}
public function cek_login()
{
if($this->CI->session->userdata('usuario')==""){
    $this->CI->session->set_flashdata('warning', 'anda belum login');
    redirect(base_url('login'),'refresh');
    
}
}
public function logout()
{
//meambuag semua session yg telah dibuat tadi saat login berhasil

$this->CI->session->unset_userdata('id');
$this->CI->session->unset_userdata('nombre');
$this->CI->session->unset_userdata('usuario');
    //setelah session di unset maka redirect ke halaman login

    $this->CI->session->set_flashdata('sukses', 'Cerrando Sesión');
    redirect(base_url('login'),'refresh');

}

}

?>