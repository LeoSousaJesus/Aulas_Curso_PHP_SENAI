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

function calcularEqGrau1($a, $b){
    return -$b/$a
}
?>