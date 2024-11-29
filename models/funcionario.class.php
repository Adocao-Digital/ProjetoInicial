<?php
    class Funcionario extends Pessoa {
        public function __construct()
        {
            parent::__construct(private string $dataAdmissao = '')
        }
    }
?>