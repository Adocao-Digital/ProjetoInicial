<?php
    class Funcionario extends Pessoa {
        public function __construct(
            private date $dataAdmissao = ''
        ){}

        public function getId(){
            return $this->id;
        }

        public function setId($id){
           $this->id = $id;
        }

        public function getDataAdmissao(){
            return $this->dataAdmissao;
        }

        public function setDataAdmissao($dataAdmissao){
           $this->dataAdmissao = $dataAdmissao;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
           $this->nome = $nome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome($sobrenome){
           $this->sobrenome = $sobrenome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
           $this->cpf = $cpf;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
           $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
           $this->senha = $senha;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
           $this->telefone = $telefone;
        }

        public function getPerfil(){
            return $this->perfil;
        }

        public function setPerfil($perfil){
           $this->perfil = $perfil;
        }
    }
?>