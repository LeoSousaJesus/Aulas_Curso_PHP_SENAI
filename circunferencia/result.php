<?php
    // importando as funções de outro arquivo
    include "funcoes.php";

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor do raio do formulário
        $raio = floatval($_POST['raio']);

        // Verifica se o raio é um número positivo
        if ($raio > 0) {
            // Calcula a área e a circunferência
            $resultado = calcularCirculo($raio);

            // Exibe os resultados
            echo "<h2>Resultados:</h2>";
            echo "<p>Área do círculo: " . number_format($resultado['area'], 2) . "</p>";
            echo "<p>Circunferência do círculo: " . number_format($resultado['circunferencia'], 2) . "</p>";
        } else {
            echo "<p>Erro: O raio deve ser um número positivo.</p>";
        }
    }
?>