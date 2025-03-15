<!--
Crie um script em PHP que gere a sequência de Fibonacci até o termo informado pelo usuário
em um formulário HTML. Exemplo: o usuário informa no formulário o número 10, o script deve gerar a sequência de Fibonacci até o termo 10.
Obs; fazer a funçao recursiva.
Obs: A sequência de Fibonacci é uma sequência de números inteiros, começando normalmente por 0 e 1, na qual, cada termo subsequente corresponde à soma dos dois anteriores.
*/-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <style> body{
                background:rgb(158, 173, 216);
            }
    </style>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>
    <hr />
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero">Número:</label><br />
        <input type="number" name="numero"/><br /><br />
        <button type="submit">Calcular</button>
</body>
</html>

<?php
    // função para calcular a sequência de Fibonacci
    function calcularFibonacci($numero) { 
        return $numero < 2 ? $numero : calcularFibonacci($numero - 1) + calcularFibonacci($numero - 2);
    }

    function calcularSequenciaFibonacci($numero) {
        $sequencia = [];
        for ($i = 0; $i <= $numero; $i++) {
            if ($i < 2) {
                $sequencia[] = $i;
            } else {
                $sequencia[] = $sequencia[$i - 1] + $sequencia[$i - 2];
            }
        }
        return $sequencia;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // declaração de variáveis
        $numero = $_POST['numero'];

        // calcular a sequência
        $sequencia = calcularSequenciaFibonacci($numero);

        //saída de dados
        echo "<h2>O número de Fibonacci de " . $numero . " é: " . calcularFibonacci($numero) . "</h2>";
        echo "<p>" . implode(", ", $sequencia) . "</p>";
    }