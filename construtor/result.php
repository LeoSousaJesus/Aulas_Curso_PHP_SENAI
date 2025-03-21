<?php
    // Importa a classe
    include 'Pessoa.class.php';

    // instancia a classe Pessoa
    $usuario = new Pessoa($_POST['nome'], $_POST['idade'], $_POST['email'], $_POST['cargo']);

    // exibir os dados
    echo "<h1>Dados do Usuário</h1>";
    echo "<hr />";
    echo "<p>Nome: " . $usuario->nome . "</p>";
    echo "<p>Idade: " . $usuario->idade . "</p>";
    echo "<p>Email: " . $usuario->email . "</p>";
    echo "<p>Cargo: " . $usuario->cargo . "</p>";
?>