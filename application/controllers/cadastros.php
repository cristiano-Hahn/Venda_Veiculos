<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastros extends CI_Controller {

function _construct(){
parent_construct();

}

	public function teste()
	{
		$this->load->view('cadteste');
	}
	
		public function adicionarteste()
	{
		$this->load->view('add_teste');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */