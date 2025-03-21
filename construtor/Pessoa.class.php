<?php
    // class Pessoa
    class Pessoa {
        // Atributos
        public $nome;
        public $idade;
        public $email;
        public $cargo;

        // método construtor
        public function __construct($nome, $idade, $email, $cargo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            $this->cargo = $cargo;
        }    
    }
?>