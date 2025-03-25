<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Física</title>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <form action="PessoaFisicaForm.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf"><br><br>
        <label for="dataNascimento">Data de Nascimento:</label><br>
        <input type="text" name="dataNascimento" id="dataNascimento"><br><br>
        <label for="profissao">Profissão:</label><br>
        <input type="text" name="profissao" id="profissao"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>
        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone"><br><br>
        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco"><br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <a href="index.php">Voltar</a>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // importando a classe Pessoa
            include 'Pessoa.class.php';
            include 'PessoaFisica.class.php';

            // cria um objeto da classe PessoaFisica
            $usuario = new PessoaFisica();

            // atribui valores aos atributos
            $usuario->setNome($_POST['nome']);
            $usuario->setCpf($_POST['cpf']);
            $usuario->setDataNascimento($_POST['dataNascimento']);
            $usuario->setProfissao($_POST['profissao']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTelefone($_POST['telefone']);
            $usuario->setEndereco($_POST['endereco']);

            // exibe os valores dos atributos
            echo "<b>Nome:</b> " . $usuario->getNome() . "<br>";
            echo "<b>CPF:</b> " . $usuario->getCpf() . "<br>";
            echo "<b>Data de Nascimento:</b> " . $usuario->getDataNascimento() . "<br>";
            echo "<b>Profissão:</b> " . $usuario->getProfissao() . "<br>";
            echo "<b>Email:</b> " . $usuario->getEmail() . "<br>";
            echo "<b>Telefone:</b> " . $usuario->getTelefone() . "<br>";
            echo "<b>Endereço:</b> " . $usuario->getEndereco() . "<br>";
        }
    ?>
</body>
</html>