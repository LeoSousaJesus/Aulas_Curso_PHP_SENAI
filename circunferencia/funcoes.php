<?php
    /*
    * Crie um  programa onde o usuário informe o tamanho de um raio de um círculo, e o programa retorna a área do círculo e o tamanho da circunferência.
    * Obs: Use a função pi() do PHP para pegar o verdadeiro valor do número PI.
    */

    // Função circunferência do círculo

    // importando as funções de outro arquivo
include "funcoes.php";
function calcularCirculo($raio) {
    $area = pi() * pow($raio, 2); // Área = π * r²
    $circunferencia = 2 * pi() * $raio; // Circunferência = 2 * π * r
    return [
        'area' => $area,
        'circunferencia' => $circunferencia
    ];
}



?>