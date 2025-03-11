<?php
    /*
    * Crie um  programa onde o usuário informe o tamanho de um raio de um círculo, e o *programa retorna a área do círculo e o tamanho da circunferência.
    * Obs: Use a função pi() do PHP para pegar o verdadeiro valor do número PI.
    */

    // Função para calcular a área do círculo
    function calcularAreaCirculo($raio) {
        return pi()*$raio**2; 
    }

    function calcularCircunferencia($raio) {
        return 2*pi()*$raio;
    }
?>