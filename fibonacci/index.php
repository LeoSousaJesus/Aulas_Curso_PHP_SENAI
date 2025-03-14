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

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // declaração de variáveis
        $numero = $_POST['numero'];

        //saída de dados
        echo "<h2>O número de Fibonacci de " . $numero . " é: " . calcularFibonacci($numero) . "</h2>";
    }