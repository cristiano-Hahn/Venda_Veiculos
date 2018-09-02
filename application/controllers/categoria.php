<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class categoria extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_categoria');
	}

	public function editar()
	{
		$this->load->view('edita_categoria');
	}
	
	public function adicionar()
	{
		$this->load->view('add_categoria');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_categoria');
	}


	public function excluir()
	{
		$this->load->view('excluir_categoria');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */