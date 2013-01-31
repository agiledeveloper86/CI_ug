<?php
class Subcontroller extends CI_Controller{
	public function index() {
		echo "This is a controller in local/app/controllers/subfolder<br />";
		echo "accessed by root/index.php/subfolder/subcontroller";

	}
}