<?php
    // declaração de array
    $cidades = array('DF' => "Brasília", 'PA' => "Belém", 'MA' => "São Luís", 'GO' => "Goiânia", 'PR' => "Curitiba");

    //percorrendo o array e exibindo os valores na tela
    foreach ($cidades as $uf => $cidade) {
        echo $uf . ":" . $cidade . "<br/>";
    }
?>