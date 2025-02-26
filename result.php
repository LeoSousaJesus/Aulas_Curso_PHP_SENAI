// Trem fantasma
// result.php
<?php
    // Declaração das variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"]; 
    $altura = str_replace(",",".",$_POST["altura"]);

    // Verifica idade e altura
    if($idade >= 12 && $altura >= 1.2){
        echo "<h1>";
        echo $nome.  " está autorizado a entrar.";
        echo "</h1>";
    }else{
        echo "<h1>";
        echo $nome.  " não está autorizado a entrar.";
        echo "</h1>";
    }

    // Usando Ternário
    $result = $idade >= 12 && $altura >= 1.2 ? "<h2>". $nome.  " está autorizado a entrar. </h2>" :  $nome.  " <h2>não está autorizado a entrar.</h2>";

    echo $result;

    // Retornar para página anterior
    echo'<br/><a href="index.html">Voltar</a>';
?>