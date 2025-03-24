<?php
    // importando a classe Pessoa
    include 'Pessoa.class.php';

    // instanciar a classe Pessoa
    $pessoa = new Pessoa();

    // atribui valores aos atributos
$pessoa->nome = "Leandro";
$idade->idade = 34;

    // exibe os valores dos atributos
    echo "Nome: " . $pessoa->nome . "<br>";
    echo "Idade: " . $pessoa->idade . "<br>";
?>