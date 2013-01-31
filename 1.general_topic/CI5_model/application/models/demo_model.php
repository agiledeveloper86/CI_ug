<?php
class Demo_model extends CI_Controller
{
	 public function __construct()
    {
        parent::__construct();
    }

    public function test()
    {
    	echo 1+1+2;
    }
}