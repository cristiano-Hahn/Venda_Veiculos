<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class marca extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_marca');
	}

	public function editar()
	{
		$this->load->view('edita_marca');
	}
	
	public function adicionar()
	{
		$this->load->view('add_marca');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_marca');
	}


	public function excluir()
	{
		$this->load->view('excluir_marca');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */