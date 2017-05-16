<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Sistema_model extends CI_Model {
	
		//FUNÇAO PARA LSIATAR DADOS DE UMA TABELA
		public function GetAll($table=NULL, $condicao=NULL)
		{			
			if ($table) {
				
				if (is_array($condicao)) {
					$this->db->where($condicao);
				}
				$query = $this->db->get($table);
				return $query->result();

			} else {
				return false;
			}
		}

		//PEGAR APENAS UM REGITRO PELA SUA ID
		public function GetByID($table=NULL, $condicao=NULL)
		{
			if ($table && is_array($condicao)) {
				
				$this->db->where($condicao);
				$this->db->limit(1);
				$query = $this->db->get($table);
				return $query->row();

			} else {
				return false;
			}
		}

		//INSERIR UM NOVO REGISTRO
		public function DoInsert($table=NULL, $dados=NULL)
		{
			
			if ($table && is_array($dados)) {
				
				$this->db->insert($table, $dados);

				if ($this->db->affected_rows()>0) {
					set_msg('msgsucess', 'Cadastro realizado com sucesso!', 'sucesso');
				} else {
					set_msg('msgerro', 'Ocorreu um erro ao tentar cadastrar, tente novamente.', 'erro');
				}

			} else {
				return false;
			}
		}

		//ATUALIZAR UM REGISTRO
		public function DoUpdate($table=NULL, $dados=NULL, $condicao=NULL)
		{			
			if ($table && is_array($dados) && is_array($condicao)) {
				
				$this->db->update($table, $dados, $condicao);

				if ($this->db->affected_rows()>0) {
					set_msg('msgsucess', 'Cadastro atualizado com sucesso!', 'sucesso');
				} else {
					set_msg('msgerro', 'Ocorreu um erro ao tentar atualizar, tente novamente.', 'erro');
				}

			} else {
				return false;
			}
		}

		//APAGAR UM REGISTRO ATRAVES DA SUA ID
		public function DoDelete($table=NULL, $condicao=NULL)
		{	
			if ($table && is_array($condicao)) {
				$this->db->delete($table, $condicao);
				if ($this->db->affected_rows()>0) {
					set_msg('msgsucess', 'Registro apagado com sucesso!', 'sucesso');
				} else {
					set_msg('msgerro', 'Ocorreu um erro ao tentar apagar, tente novamente.', 'erro');
				}
			} else {
				return false;
			}
		}

	}
	
	/* End of file Sistema_model.php */
	/* Location: ./application/models/Sistema_model.php */