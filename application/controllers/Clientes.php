<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Clientes extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if (!$this->ion_auth->logged_in())
			{
				set_msg('msgerro', 'Erro: Você precisa estar logado no sistema.', 'erro');
				redirect('login');
			}
			
		}
	
		public function index()
		{
			
			$data['clientes'] = $this->sistema_model->GetAll('clientes');

			
			$this->load->view('layout/header');
			$this->load->view('clientes/index', $data);
			$this->load->view('layout/footer');	
			
			
		}

		public function add()
		{

			$this->form_validation->set_rules('nome', 'Nome', 'required');

			if ($this->form_validation->run() == TRUE) {
				
					$dados = elements(array(
								'tipo',
								'nome',
								'data_nascimento',
								'cpf_cnpj',
								'rg_ie',
								'email',
								'telefone',
								'cep',
								'endereco',
								'numero',
								'bairro',
								'complemento',
								'cidade',
								'estado',
								'nome_pai',
								'nome_mae',
								'obs'

						), $this->input->post());
					$this->sistema_model->DoInsert('clientes', $dados);
					redirect('clientes');

			}else{
				$this->load->view('layout/header');
				$this->load->view('clientes/add');
				$this->load->view('layout/footer');
			}

				
		}

		public function edit($id=NULL)
		{
			
			$this->load->view('layout/header');
			$this->load->view('clientes/edit', $data);
			$this->load->view('layout/footer');	
		}

		public function del($id=NULL)
		{
			
			
		}
	
	}
	
	/* End of file Config.php */
	/* Location: ./application/controllers/Config.php */