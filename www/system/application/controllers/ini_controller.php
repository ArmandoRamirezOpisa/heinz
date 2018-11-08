<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ini_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('construction_view');
	}
	
	public function home()
	{
		$this->load->view('home_view');
	}
}
?>