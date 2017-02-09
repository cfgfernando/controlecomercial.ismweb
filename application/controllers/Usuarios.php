<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			set_msg('msgerro', 'Erro: Você precisa estar logado no sistema.', 'erro');
			redirect('login');
		}
		/* abaixo foi tirado a (!) negação ate habilitar niveis de admin*/
		if ($this->ion_auth->is_admin())
		{
			set_msg('msgerro', 'Erro: Você não tem permissão para acessar esta página.', 'erro');
			redirect('principal');
		}
		$this->load->model('ion_auth_model', 'aion_auth');


	}

	public function index()
	{
		$data['users'] = $this->ion_auth->users()->result();
	
		$this->load->view('layout/header');
		$this->load->view('usuarios/index', $data);
		$this->load->view('layout/footer');
	}

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */