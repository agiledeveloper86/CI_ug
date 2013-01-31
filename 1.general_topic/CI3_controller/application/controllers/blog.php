<?php
class Blog extends CI_Controller{

	public function index() {
		echo "Hello world from blog controller, index function..."."<br />";
		echo "This controller also contents comments function.";
	}
	public function comments() {
		echo "This is comments method or function from blog controller(class)...";
	}
}