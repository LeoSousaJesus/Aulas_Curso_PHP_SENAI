<?php
    // incli a classe Pessoa
    include 'Pessoa.class.php';

    // instancia a classe Pessoa(criar um objeto do tipo Pessoa)
    $usuario = new Pessoa();

    // pegar os valores do formulário e atribuir ao objeto
    $usuario->nome = $_POST['nome'];
    $usuario->idade = $_POST['idade'];
    $usuario->cpf = $_POST['cpf'];
    $usuario->email = $_POST['email'];

    echo "<h1>Dados do Usuário</h1>";
    echo "<b>Nome:</b> " . $usuario->nome . "<br />";
    echo "<b>Idade:</b> " . $usuario->idade . "<br />";
    echo "<b>CPF:</b> " . $usuario->cpf . "<br />";
    echo "<b>E-mail:</b> " . $usuario->email . "<br />";

    // executar o método saudar
    echo "<h1>" . $usuario->saudar() . "</h1>";
?>