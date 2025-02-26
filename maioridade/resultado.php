<?php
    //declaração da variavel
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    //estrutura de decisão
    //if ($idade >=18) echo $nome . "  é maior de idade.";
    //else echo $nome . "  é menor de idade.";

    //ternario
    $resultado = $idade>= 18 ? " é maior de idade." : " é menor de idade.";

    //saída
    echo $nome . $resultado;
?>