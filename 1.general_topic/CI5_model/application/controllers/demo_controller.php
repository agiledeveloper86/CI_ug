<?php
class Demo_controller extends CI_Controller
{
	function index()
	{
		$this->load->model('demo_model'); //loading demo_model
		$this->demo_model->test();        //accessing test function of demo_model  
		

         //$this->demo_model->function(); 
		//$this->load->model('demo_model', 'fubar'); //assigning demo_model to a different object name fubar
        //$this->fubar->function(); 
	}
}