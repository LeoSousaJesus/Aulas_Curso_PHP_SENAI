<?php
    //função
    function darBoasVindas($nome) {
    // retorna o valor da função
    return "Seja bem vindo, " . $nome . "!";
    }

    // algoritmo principal
    echo darBoasVindas($_POST['nome']);
?>