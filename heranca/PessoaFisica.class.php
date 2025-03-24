<?php
    // classe Pessoa Física
    final class PessoaFisica extends Pessoa {
        // atributos
        private $nome;
        private $cpf;
        private $dataNascimento;
        private $profissao;
        private $genero;
        
        // métodos de acesso
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setProfissao($profissao) {
            $this->profissao = $profissao;
        }

        public function getProfissao() {
            return $this->profissao;
        }
        
        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function getGenero() {
            return $this->genero;
        }
    }
?>