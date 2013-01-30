<?php
class Demo_controller extends CI_Controller
{
	function index()
	{
		$this->load->model('demo_model');
		$this->demo_model->function(); 


		$this->load->model('demo_model', 'fubar');
        $this->fubar->function(); 
	}
}