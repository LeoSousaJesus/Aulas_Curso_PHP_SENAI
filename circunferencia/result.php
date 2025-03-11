<?php
    // importando as funções
    include "funcoes.php";

    //declaração de variáveis$
    $raio = str_ireplace(",",".", $_POST['raio']);
 
    // saída de dados
    echo "<b>Áreado círculo:</b> " . (calcularAreaCirculo($raio), 2) . ".<br />";
    echo "<b>Tamanho da circunferência:<b/> " . round(calcularCircunferencia($raio), 2) . "<br/>";
?>