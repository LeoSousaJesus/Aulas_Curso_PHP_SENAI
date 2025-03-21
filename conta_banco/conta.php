<?php
include 'classe.php';

// Verificando o processamento dos dados do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeroConta = rand(10000, 99999);
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $saldo = $_POST['saldo'];

    $conta = new ContaBancaria($numeroConta, $nome, $cpf, $endereco, $cidade, $estado, $cep, $email, $saldo);
    $dadosConta = $conta->DadosConta();

    echo "Dados da Conta:<br>";
    echo "Número da Conta: " . $dadosConta['numeroConta'] . "<br>";
    echo "Nome: " . $dadosConta['nome'] . "<br>";
    echo "CPF: " . $dadosConta['cpf'] . "<br>";
    echo "Endereço: " . $dadosConta['endereco'] . "<br>";
    echo "Cidade: " . $dadosConta['cidade'] . "<br>";
    echo "Estado: " . $dadosConta['estado'] . "<br>";
    echo "CEP: " . $dadosConta['cep'] . "<br>";
    echo "Email: " . $dadosConta['email'] . "<br>";
    echo "Saldo: " . $dadosConta['saldo'] . "<br>";
} else {
    echo " Não foi possível acessar a conta!";
}
?>
