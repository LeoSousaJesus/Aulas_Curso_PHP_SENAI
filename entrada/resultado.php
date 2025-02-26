<?php
    // declaração da variável
    $nome = $_POST["nome"];

    // saída de dados
    echo "<h1>Seja bem vindo: " . $nome . "</h1>";

    //link para voltar para página anterior
    echo '<a href="index.html">Voltar</a>';
?>