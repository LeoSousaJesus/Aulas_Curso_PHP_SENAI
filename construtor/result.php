<?php
    // Importa a classe
    include 'Pessoa.class.php';

    // instancia a classe Pessoa
    $usuario = new Pessoa("", 0, "", "");

    // intancia os atributos
    $usuario->nome = $_POST['nome'];
    $usuario->idade = $_POST['idade'];
    $usuario->email = $_POST['email'];
    $usuario->cargo = $_POST['cargo'];

    // exibir os dados
    echo "<h1>Dados do Usuário</h1>";
    echo "<hr />";
    echo "<p>Nome: " . $usuario->nome . "</p>";
    echo "<p>Idade: " . $usuario->idade . "</p>";
    echo "<p>Email: " . $usuario->email . "</p>";
    echo "<p>Cargo: " . $usuario->cargo . "</p>";
?>