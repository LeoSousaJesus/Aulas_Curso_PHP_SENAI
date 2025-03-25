<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Jurídica</title>
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
    <form action="PessoaJuridicaForm.php" method="post">
        <label for="razaoSocial">Razão Social:</label><br>
        <input type="text" name="razaoSocial" id="razaoSocial"><br><br>
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" name="cnpj" id="cnpj"><br><br>
        <label for="nomeFantasia">Nome Fantasia:</label><br>
        <input type="text" name="nomeFantasia" id="nomeFantasia"><br><br>
        <button type="submit">Enviar</button><br><br>
        <br /><br />
        <a href="index.php">Voltar</a>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // importando a classe Pessoa
            include 'Pessoa.class.php';
            include 'PessoaJuridica.class.php';

            // cria um objeto da classe PessoaJuridica
            $empresa = new PessoaJuridica();

            // atribui valores aos atributos
            $empresa->setRazaoSocial($_POST['razaoSocial']);
            $empresa->setCnpj($_POST['cnpj']);
            $empresa->setNomeFantasia($_POST['nomeFantasia']);

            // exibe os valores dos atributos
            echo "<b>Razão Social:</b> " . $empresa->getRazaoSocial() . "<br>";
            echo "<b>CNPJ:</b> " . $empresa->getCnpj() . "<br>";
            echo "<b>Nome Fantasia:</b> " . $empresa->getNomeFantasia() . "<br>";
        }
    ?>
</body>
</html>