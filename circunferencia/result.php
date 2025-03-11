<?php
    // importando as funções
    include "funcoes.php";

    //declaração de variáveis$
    $raio = str_replace(",",".",$_POST['raio']);
 
    // saída de dados
    echo "<b>Área do círculo:<b/> " . round(calcularAreaCirculo($raio),2).".<br />";
    echo "<b>Tamanho da circunferência:<b/> " . round(calcularCircunferencia($raio),2);
?>