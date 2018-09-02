<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelo extends CI_Controller {

	function _construct(){
		parent_construct();
	
		

	}

	public function segunda()
		{
			$this->load->view('teste');
		}

		public function index()
		{
			$this->load->view('teste');
		}
}
