<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Config extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if (!$this->ion_auth->logged_in())
			{
				set_msg('msgerro', 'Erro: Você precisa estar logado no sistema.', 'erro');
				redirect('login');
			}
			if (!$this->ion_auth->in_group(1))
			{
				set_msg('msgerro', 'Erro: Você não tem permissão para acessar essa página.', 'erro');
				redirect('principal');
			}
		}
	
		public function index()
		{
			
			$this->form_validation->set_rules('razao', 'Razão social', 'required');

			if ($this->form_validation->run()) {

				$id = $this->input->post('id_config');
				
				$dados = elements(
							array(
								'razao',
								'nome_fantasia',
								'cnpj',
								'ie',
								'im',
								'cep',
								'endereco',
								'numero',
								'bairro',
								'complemento',
								'cidade',
								'estado',
								'telefone',
								'email',
								'site',
								'logotipo',
								'txt_ordem_servico',
								'txt_venda'
							),
							$this->input->post()
						);
				$dados['ultima_alteracao'] = dataDiaDB();

				$this->sistema_model->DoUpdate('configuracoes', $dados, array('id_config'=>$id));
				redirect('config');

			} else {
				$data['dados'] = $this->sistema_model->GetByID('configuracoes', array('id_config'=>1));
				$this->load->view('layout/header');
				$this->load->view('config/index', $data);
				$this->load->view('layout/footer');		
			}
				
		}
	
	}
	
	/* End of file Config.php */
	/* Location: ./application/controllers/Config.php */