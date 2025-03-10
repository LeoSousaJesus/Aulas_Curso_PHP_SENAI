<?php
/*
* Recebe usuário os valores de A e B
* A é multiplicado por X e B é multiplicado por 1
* Pega o resultado da multiplicação de A por X e soma com B
* O resultado da soma tem que ser 0
* a*x+b = 0
* a*x = -b
*x = -b/a
*/

/* crie um programa que receba dois números do usuário a partir de um formulário HTML
* e que o mesmo escolha um dos seguintes cálculos
* - Área do Quadrilátero
* - Área do Triângulo
* - Equação do 1º grau
* Após o usuário escolher o calculo, o programa retorna o resultado desejado.
*/

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

//declaração de variáveis$
$n1 = str_ireplace(",",".", $_POST[n1]);
$n2 = str_ireplace(",",".", $_POST[n2]);
$operacao = $_POST['operacao'];

//estrutura escolha
switch ($operacao){
    case "quadrilatero":
        echo "Área do qudrilátero é " . calcularQuadrilatero($n1, $n2) . ".";
        break;
    case "triângulo":
        echo "Área do triângulo é " . calcularTriangulo($n1, $n2) . ".";
        break;
    case "Equação de 1º grau":
        echo "A equação do 1º grau é " . calcularEqGrau1($n1, $n2) . ".";
        break;
}
?>