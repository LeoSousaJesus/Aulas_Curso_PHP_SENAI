<?php
    // classe Pessoa
    class Pessoa {
        // atributos
        private $nome;
        private $idade;
        private $email;

        // método construtor
        public function __construct($nome, $idade, $email) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
        }

        // métodos de acesso
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

    }
?>