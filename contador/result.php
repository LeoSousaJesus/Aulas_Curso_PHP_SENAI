<?php
    //declarando variáveis
    $numero = $_POST['numero'];
    $numero2 = $numero;

    
    //Laço de repetição while
    echo "Repetição com while: <br/>";
    while ($numero >=0) {
        // exibe o número na tela
        echo $numero . "<br />";

        // diminuir o valor do numero
        $numero--;

    }
    // laço de repetição do...while
    echo "Repetiçõa com do...while: <br/>";
    do {
        echo $numero2 . "<br />";
        $numero2--;
    } while ($numero2 >= 0);

    // laço de repetição for
    echo "Repetição com for: <br/>";
    for ($n = $_POST['numero'];$n >=0; $n--){
        echo $n . "<br/>";
    }
?>