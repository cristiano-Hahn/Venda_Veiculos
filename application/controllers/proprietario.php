<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proprietario extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_proprietario');
	}

	public function editar()
	{
		$this->load->view('edita_proprietario');
	}
	
	public function adicionar()
	{
		$this->load->view('add_proprietario');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_proprietario');
	}


	public function excluir()
	{
		$this->load->view('excluir_proprietario');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */