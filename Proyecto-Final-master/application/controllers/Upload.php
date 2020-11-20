<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		// $this->load->model('Model_login');
		// $this->load->library('form_validation');
		
		// $this->load->view('header');

	}
	
	public function form(){
		$this->load->view('agregarform');
		// $this->load->view('footer');
	}
	
	public function file_data(){
		//validate the form data 

		// $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');

        // if ($this->form_validation->run() == FALSE){
			$this->load->view('agregarform');
		// }else{ç
			
			//get the form values
			$data['nombre'] = $this->input->post('nombre', TRUE);
			$data['usuario'] = $this->input->post('usuario', TRUE);
			$data['password'] = $this->input->post('password', TRUE);
			// $data['foto'] = $this->input->post('foto', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('agregarform', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['foto'] = $upload_data['file_name'];

				//store pic data to the db
				$this->Model_login->store_pic_data($data);

				redirect('/');
			}
			// $this->load->view('footer');
		}
	}
// }
