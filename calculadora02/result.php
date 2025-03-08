<?php
    /* crie um programa que receba dois números do usuário a partir de um formulário HTML
    * e que o mesmo escolha um dos seguintes cálculos
    * - Área do Quadrilátero
    * - Área do Triângulo
    * - Equação do 1º grau
    * Após o usuário escolher o calculo, o programa retorna o resultado desejado.
    */
    
 

 

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $calculo = $_POST['calculo'];

        
        switch ($calculo) {
            case 'quadrilatero':
                $resultado = $numero1 * $numero2;
                echo "Área do Quadrilátero: $resultado";
                break;
                // Área do quadrilátero (base * altura)
            case 'triangulo':
                $resultado = ($numero1 * $numero2) / 2;
                echo "Área do Triângulo: $resultado";
                break;
                // Área do triângulo (base * altura / 2)
                case 'equacao':
                    // Equação do 1º grau: ax + b = 0 => x = -b / a
                    if ($numero1 == 0) {
                        echo "<p>Erro: 'a' não pode ser zero na equação do 1º grau.</p>";
                    } else {
                        $resultado = -$numero2 / $numero1;
                        echo "<p>Solução da Equação do 1º Grau: x = $resultado</p>";
                    }
                    break;
        }
   
    echo'<br /><a href="index.html">Voltar</a>';


?>

