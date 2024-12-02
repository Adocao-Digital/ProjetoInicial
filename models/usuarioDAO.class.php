<?php
    class UsuarioDAO extends Conexao {
        public function __construcut(){
            parent::__construct();
        }

        public function inserir($usuario){
            $sql = "INSERT INTO usuarios (nome_usuario, sobrenome_usuario, datanasc_usuario, cpf_usuario, sexo, email_usuario, senha_usuario, telefone_usuario, perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            try{
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getNome());
                $stm->bindValue(2, $usuario->getSobrenome());
                $stm->bindValue(3, $usuario->getDatanasc());
                $stm->bindValue(4, $usuario->getCpf());
                $stm->bindValue(5, $usuario->getSexo());
                $stm->bindValue(6, $usuario->getEmail());
                $stm->bindValue(7, $usuario->getSenha());
                $stm->bindValue(8, $usuario->getTelefone());
                $stm->bindValue(9, $usuario->getPerfil());
                $stm->execute();
                $this->db = null;
                return "Usuário cadastrado com sucesso!";
            } catch (PDOException $e){
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }

        public function login($usuario)
		{
			$sql = "SELECT * FROM usuarios WHERE email_usuario = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $usuario->getEmail());
				$stm->execute();
				$this->db = null;
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getMessage();
				echo $e->getCode();
				die();
			}
		}
    }
?>