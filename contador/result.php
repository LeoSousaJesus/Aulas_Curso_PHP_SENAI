<?php
    //declarando variáveis
    $numero = $_POST['numero'];
    
    //Laço de repetição while
    while ($numero >=0) {
        // exibe o número na tela
        echo $numero . "<br />";

        // diminuir o valor do numero
        $numero--;

    }
?>