<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELF</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Digite o seu nome:</label><br />
        <input type="text" name="nome"/><br /><br />
        <button type="submit">Enviar</button>
    </form>
    <hr />
    <h1>
        <marquee>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // declaração de variáveis
                $nome = $_POST['nome'];

                //saída de dados
                echo $nome;
            }
        ?>    
        </marquee>
    </h1>
</body>
</html>