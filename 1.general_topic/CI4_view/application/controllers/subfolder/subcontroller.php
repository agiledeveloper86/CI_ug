<?php
class Subcontroller extends CI_Controller{
	public function index() {
		echo "this is a controller in a subfolder<br />";
		echo "accessed by root/index.php/subfolder/subcontroller";

	}
}