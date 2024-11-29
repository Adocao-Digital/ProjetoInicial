<?php
    class Pessoa {
        public function __construct(
            private int $id = 0,
            private string $nome = '',
            private string $sobrenome = '',
            private string $cpf = '',
            private string $email = '',
            private string $senha = '',
            private string $telefone = '',
            private string $perfil = ''
        ){}

        public function getId(){
            return $this->id;
        }

        public function setId($id){
           $this->id = $id;
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