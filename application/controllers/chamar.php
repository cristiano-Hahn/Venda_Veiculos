<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chamar extends CI_Controller {

function _construct(){
parent_construct();

}

	public function autentica()
	{
		$this->load->view('autenticar');
	}
	
		public function paginaprincipal()
	{
		$this->load->view('principal');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */