<?php
class Helper_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('helper_view1');
	}
	function view2()
	{
		$this->load->view('helper_view2.php');
	}
}