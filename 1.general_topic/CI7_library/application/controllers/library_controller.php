<?php
class Library_controller extends CI_Controller
{   
	
	function library()
	{   
		$this->load->view('library_view');
	}

	function demolib()
	{
		$this->load->library('demolibrary');
		$this->demolibrary->talk();
	}
}