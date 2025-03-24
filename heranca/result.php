<?php
    // importando a classe Pessoa
    include 'Pessoa.class.php';
    include 'PessoaFisica.class.php';

    // cria um objeto da classe PessoaFisica
    $usuario = new PessoaFisica();

    // atribui valores aos atributos
    $usuario->setEmail("leo@gmail.com");
    $usuario->setTelefone("(61) 99234-5678");
    $usuario->setEndereco("Rua 400, Lote 45, Bairro Novo");

    // exibe os valores dos atributos
    echo "<b>Email:</b> " . $usuario->getEmail() . "<br>";
    echo "<b>Telefone:</b> " . $usuario->getTelefone() . "<br>";
    echo "<b>Endereço:</b> " . $usuario->getEndereco() . "<br>";
?>