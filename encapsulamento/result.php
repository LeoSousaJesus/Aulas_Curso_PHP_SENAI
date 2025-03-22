<?php
    // importando a classe
    include 'Pessoa.class.php';

    // instancia a classe Pessoa
    $usuario = new Pessoa("", 0, "");

    // atribui valores aos atributos
    $usuario->setNome($_POST ['nome']);
    $usuario->setIdade($_POST ['idade']);
    $usuario->setEmail($_POST ['email']);

    // exibe os valores dos atributos
    echo "<b>Nome:</b> " . $usuario->getNome() . ".<br />";
    echo "<b>Idade:</b> " . $usuario->getIdade() . ".<br />";
    echo "<b>Email:</b> " . $usuario->getEmail() . ".<br />";
?>