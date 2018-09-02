<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class municipio extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrar()
	{
		$this->load->view('cad_municipio');
	}

	public function editar()
	{
		$this->load->view('edita_municipio');
	}
	
	public function adicionar()
	{
		$this->load->view('add_municipio');
	}

	
	public function pesquisar()
	{
		$this->load->view('pesquisa_municipio');
	}


	public function excluir()
	{
		$this->load->view('excluir_municipio');
	}

		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */