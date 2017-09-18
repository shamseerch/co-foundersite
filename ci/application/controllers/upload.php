<?php
class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('uploadform',array('error' => ' ' )); 
      } 
		
      public function do_upload() { 

         $config['upload_path']   = './upload'; 
         $config['allowed_types'] = 'gif|jpg|png|docx'; 
         // $config['max_size']      = 1000; 
         // $config['max_width']     = 10024; 
         // $config['max_height']    = 7680;  
       // echo $config['allowed_types'];
       //    die;
         $this->load->library('upload', $config);
			// $this->upload->initialize($config);
         // echo $this->upload->do_upload('userfile');
         if ( ! $this->upload->do_upload('userfile')) {

            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('uploadform', $error); 
            
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            // $this->load->view('uploadsuccess', $data);
            $data= array('name' =>$this->upload->data('file_name'),
               );
            $this->db->insert('dumy',$data);
            
         } 
      } 
   } 
   ?>