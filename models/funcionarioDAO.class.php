<?php
    class FuncionarioDAO extends Conexao {
        public function __construcut(){
            parent::__construct();
        }

        public function inserir($funcionario){
            $sql = "INSERT INTO funcionarios (nome_funcionario, dataAdmissao_funcionario, sobrenome_funcionario, cpf_funcionario, email_funcionario, senha_funcionario, telefone_funcionario, perfil_funcionario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            try{
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getNome());
                $stm->bindValue(2, $usuario->getDataAdmissao());
                $stm->bindValue(3, $usuario->getSobrenome());
                $stm->bindValue(4, $usuario->getCpf());
                $stm->bindValue(5, $usuario->getEmail());
                $stm->bindValue(6, $usuario->getSenha());
                $stm->bindValue(7, $usuario->getTelefone());
                $stm->bindValue(8, $usuario->getPerfil());
                $stm->execute();
                $this->db = null;
                return "Funcionário cadastrado com sucesso!";
            } catch (PDOException $e){
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }
    }
?>