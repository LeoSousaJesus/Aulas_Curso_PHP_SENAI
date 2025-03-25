<?php
    // classe Pessoa Jurídica
    final class PessoaJuridica extends Pessoa {
        // atributos
        private $razaoSocial;
        private $cnpj;
        private $nomeFantasia;

        // métodos de acesso
       public function setRazaoSocial($razaoSocial) {
            $this->razaoSocial = $razaoSocial;
        }

        public function getRazaoSocial() {
            return $this->razaoSocial;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setNomeFantasia($nomeFantasia) {
            $this->nomeFantasia = $nomeFantasia;
        }

        public function getNomeFantasia() {
            return $this->nomeFantasia;
        }
    }
?>