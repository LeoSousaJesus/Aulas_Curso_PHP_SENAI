<?php
    // declaração de variáveis
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sala = $_POST['sala'];

    // estrutura de decisão switch...case
    switch ($sala){
        case "1":
            $idadeMinima = 0;
            break;
        case "2":
            $idadeMinima = 12;
            break;
        case "3":
            $idadeMinima = 14;
            break;
        case "4":
            $idadeMinima = 16;
            break;
        case "5":
            $idadeMinima = 18;
            break;

    }
?>