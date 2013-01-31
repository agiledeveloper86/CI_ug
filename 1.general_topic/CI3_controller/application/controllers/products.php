<?php
class Products extends CI_Controller{
	public function index() {
		echo "Passing URI Segments to Functions. All texts are from index method <br />" ;
		echo "This controller also contents shoes function with $type and $color segments..<br />" ;
		echo "This controller also contents private function or method _utility." ;



	}
	public function shoes($type, $color) {
		echo $type."_";
		echo $color;

	}
	private function _utility() {
		echo "private function can not be loaded";
	}
}