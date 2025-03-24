<?php
    // Classe Pessoa
    class Pessoa {
        // Atributos
        private $telefone;
        private $endereco;
        private $email;

        // Métodos de acesso
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }
    }
    ?>