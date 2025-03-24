<?php
    // importando a classe Pessoa
    include 'Pessoa.class.php';
    include 'PessoaFisica.class.php';

    // cria um objeto da classe PessoaFisica
    $usuario = new PessoaFisica();

    // atribui valores aos atributos
    $usuario->setNome("Leonel");
    $usuario->setCpf("123.456.789-10");
    $usuario->setDataNascimento("28/02/1991");
    $usuario->setProfissao("Programador");
    $usuario->setEmail("leo@gmail.com");
    $usuario->setTelefone("(61) 99234-5678");
    $usuario->setEndereco("Rua 400, Lote 45, Bairro Novo");

    // exibe os valores dos atributos
    echo "<b>Nome:</b> " . $usuario->getNome() . "<br>";
    echo "<b>CPF:</b> " . $usuario->getCpf() . "<br>";
    echo "<b>Data de Nascimento:</b> " . $usuario->getDataNascimento() . "<br>";
    echo "<b>Profissão:</b> " . $usuario->getProfissao() . "<br>";
    echo "<b>Email:</b> " . $usuario->getEmail() . "<br>";
    echo "<b>Telefone:</b> " . $usuario->getTelefone() . "<br>";
    echo "<b>Endereço:</b> " . $usuario->getEndereco() . "<br>";

?>