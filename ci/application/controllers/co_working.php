<?php

class co_working extends CI_Controller{
	
	public function cwreg()
	{ 
		$this->load->helper('url');
		$this->load->view("cwreg");
	}
}
?>