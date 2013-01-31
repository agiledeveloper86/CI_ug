<?php
class Blog extends CI_Controller 
{ 

  function index()
  { echo "<p>"."Hi, I am from blog controller, index function.<br /> 
          Check index function in this controller for loading multleple view.<br />
          This controller also contains subview method for loading <q>subfolder/subview</q><br />
          This controller also contains array_fn and object_fn functions demonstrating procedurefor adding Dynamic Data to the View.<br />
          Go to blogview.php in local/app/blogview.php and corelate the remaning clues.<br />
          This controller also contains loop method for demonstration of looping."."</p>" ;
    
    /* 
    //for loading multleple view.
      $data['page_title'] = 'Your title';
      $this->load->view('header');
      $this->load->view('menu');
      $this->load->view('content', $data);
      $this->load->view('footer');
    /* */
  }

  
  function subview()
  {
    $this->load->view("subfolder/subview");
  }

	
  function array_fn()
  {
	  $data = array(
               'title' => 'My array Title',
               'heading' => 'My array Heading',
               'message' => 'My array Message'
          );
	  $this->load->view('blogview', $data);
  }

  
  
  function object_fn()
  {
    $data['title'] = "My Object Title";
    $data['heading'] = "My Object Heading";
    $data['message'] = "My Object Message";
    $this->load->view('blogview', $data);
  }
    

  function loop()
  {
    $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

    $data['title'] = "My Real Title";
    $data['heading'] = "My Real Heading";

    $this->load->view('loopview', $data);
  }


}
