<?php
    class usuarioDAO extends Conexao {
        public function __construcut(){
            parent::__construct();
        }

        public function inserir($usuario){
            $sql = $this->db->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, email, senha, telefone, perfil) VALUES (?, ?, ?, ?, ?, ?)");
            try{
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getNome());
                $stm->bindValue(2, $usuario->getSobrenome());
                $stm->bindValue(3, $usuario->getCpf());
                $stm->bindValue(4, $usuario->getEmail());
                $stm->bindValue(5, $usuario->getSenha());
                $stm->bindValue(6, $usuario->getTelefone());
                $stm->bindValue(7, $usuario->getPerfil());
                $stm->execute();
                $this->db = null;
                return "Usuário cadastrado com sucesso!";
            } catch (PDOException $e){
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }
    }
?>