<?php
    // classe Pessoa
    class Pessoa{
        // atributos da classe
        public $nome;
        public $idade;
        public $cpf;
        public $email;

        // método
    function saudar(){
        return "Olá meu nome é " . $this->nome . " é um prazer estar aqui!";
    }

    function exibirCartaoVisitas() {
        echo "<h2>Segue o meu cartão de visitas</h2>";
        echo "<b>Nome:</b> " . $this->nome . "<br />";
        echo "<b>Idade:</b> " . $this->idade . "<br />";
        echo "<b>CPF:</b> " . $this->cpf . "<br />";
        echo "<b>E-mail:</b> " . $this->email . "<br />";
    }
}
?>