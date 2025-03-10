<?php
// importando as funções de outro arquivo
include "funcoes.php";

    // função do quadrilátero
function calcularQuadrilatero($a, $b){
    return -$b *$a
}

// função do triângulo
function calcularTriangulo($a, $b){
    return ($b * $a)/2;
}

//função da equação do 2º grau
function calcularEqGrau1($a, $b){
    return -$b/$a;
}
?>