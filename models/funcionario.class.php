<?php
    class Funcionario extends Pessoa {
        public function __construct(private string $dataAdmissao = '')
        {
            parent::__construct(
            nome: $nome,
            sobrenome: $sobrenome,
            cpf: $cpf,
            sexo: $sexo,
            email: $email,
            senha: $senha,
            telefone: $telefone,
            perfil: $perfil);
        }
    }
?>