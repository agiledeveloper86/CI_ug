<?php
class Blog extends CI_Controller 
{

	function index()
	{
	  $data = array(
               'title' => 'My Title',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
	  $this->load->view('blogview', $data);
	  //$data['page_title'] = 'Your title';
      //$this->load->view('header');
      //$this->load->view('menu');
      //$this->load->view('content', $data);
      //$this->load->view('footer');
   }
	
}
