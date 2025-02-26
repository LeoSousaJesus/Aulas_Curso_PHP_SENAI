/ result.php

<?php
    // Declaração das variáveis
    $nome = $_POST["nome"];
    $peso = str_replace(",",".",$_POST["peso"]); // Função str_replace(), para substituir a virgula (,) por ponto (.)
    $altura = str_replace(",",".",$_POST["altura"]);

    // Calcular o IMC
    $imc = $altura * $altura; // Forma 1
    $imc = $peso/$altura**2; // Forma 2
    $imc = $peso/pow($altura,2); // Forma 3

    // Diagnóstico com base no imc

    if ($imc <=  18.5){
        $result = $nome . " está abaixo do peso.";
    } 
    else if($imc <= 25){
        $result = $nome . " está no peso ideal.";
    } 
    else if($imc <= 30){
        $result = $nome . " está acima do peso.";
    } 
    else if($imc <= 35){
        $result = $nome . " está obeso.";
    } 
    else if($imc <= 40){
        $result = $nome . " está com obesidade nivel II.";
    }else{
        $result = $nome . " está com obesidade mórbida.";
    } 

    // Exibe o valor do IMC na tela
    echo '<body style="font-family: Arial, Helvetica, sans-serif;">';
    echo "<h1 style='text-align: center;'>".$nome." seu imc é: ". round($imc, 2) . "</h1>"; // Função round() diminui as casas decimais, arredonda
    echo "<h2 style='text-align: center;'>".$result. "</h2>"; 
    echo "</body>";

    // Retornar para página anterior
    echo'<br/><a href="index.html">Voltar</a>';
?>