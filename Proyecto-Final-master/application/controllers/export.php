<?php

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class export extends CI_Controller {
	
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Model_login');
			
		}
		
		public function index()
		{
			$data['login']=$this->Model_login->retornarRegistro();
			$this->load->view('v_export',$data);
			
		}
		function export()
 {
  $file_name = 'student_details_on_'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
   
     // get data 
	 $data=$this->Model_login->retornarRegistro();

     // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("Student Name","Student Phone"); 
     fputcsv($file, $header);
     foreach ($data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }
	
	}
	
	/* End of file export.php */
	
?>