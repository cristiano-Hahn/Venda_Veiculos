<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class estado extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_estado');
	}

	public function editar()
	{
		$this->load->view('edita_estado');
	}
	
	public function adicionar()
	{
		$this->load->view('add_estado');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_estado');
	}


	public function excluir()
	{
		$this->load->view('excluir_estado');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */