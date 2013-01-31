<?php
class Products extends CI_Controller{
	public function index() {
		echo "Passing URI Segments to Functions<br />" ;
		echo "also contents shoes function with id and sandals segments..<br />" ;
		echo "also contents private function or method _utility." ;



	}
	public function shoes($sandals, $id) {
		echo $sandals;
        echo $id;

	}
	private function _utility() {
		echo "private function can not be loaded";
	}
}