<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_usuario');
	}

	public function editar()
	{
		$this->load->view('edita_usuario');
	}
	
	public function adicionar()
	{
		$this->load->view('add_usuario');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_usuario');
	}


	public function excluir()
	{
		$this->load->view('excluir_usuario');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */