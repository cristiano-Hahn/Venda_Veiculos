<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class veiculo extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_veiculo');
	}

	public function editar()
	{
		$this->load->view('edita_veiculo');
	}
	
	public function adicionar()
	{
		$this->load->view('add_veiculo');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_veiculo');
	}


	public function excluir()
	{
		$this->load->view('excluir_veiculo');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */