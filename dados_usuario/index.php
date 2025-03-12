<!--Crie um novo projeto chamado "dados_usuario", e nele crie um arquivo chamado "index.php". onde voçê ira criar um formulario onde o usuário irá preencher os seguintes dados:
- Nome, Idade,  E-mail, Telefone, CPF, Profissão, CEP, UF,Cidade, Bairro, Logradouro, Complemento, número
os dados devem ser armazenados em uma array e apresentados na tela. */ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Usuário</title>
    <style> body{
                background:rgb(216, 179, 158);
            }
    </style>
</head>
<body>
    <h1>Cadastrar Usúario</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Informe o nome: </label><br />
        <input type="text" name="nome"> <br /><br />

        <label for="idade">Informe a idade: </label><br />
        <input type="text" name="idade"> <br /><br />

        <label for="email">Informe o e-mail: </label><br />
        <input type="text" name="email"> <br /><br />

        <label for="telefone">Informe o telefone: </label><br />
        <input type="text" name="telefone"> <br /><br />
        
        <label for="cpf">Informe o CPF: </label><br />
        <input type="text" name="cpf"> <br /><br />

        <label for="proficao">Informe a profissão: </label><br />
        <input type="text" name="proficao"> <br /><br />

        <label for="cep">Informe o CEP: </label><br />
        <input type="text" name="cep"> <br /><br />

        <label for="uf">Informe o UF: </label><br />
        <input type="text" name="uf"> <br /><br />

        <label for="cidade">Informe a cidade: </label><br />
        <input type="text" name="cidade"> <br /><br />

        <label for="bairro">Informe o bairro: </label><br />
        <input type="text" name="bairro"> <br /><br />

        <label for="logradouro">Informe o logradouro: </label><br />
        <input type="text" name="logradouro"> <br /><br />

        <label for="complemento">Informe o complemento: </label><br />
        <input type="text" name="complemento"> <br /><br />

        <label for="numero">Informe o número: </label><br />
        <input type="text" name="numero"> <br /><br />

        <button type="submit">Enviar</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $dados = array('Nome' =>$_POST['nome'], 'Idade' =>$_POST['idade'], 'E-mail' =>$_POST['email'], 'Telefone' =>$_POST['telefone'], 'CPF' =>$_POST['cpf'], 'Profissão' =>$_POST['proficao'], 'CEP' =>$_POST['cep'], 'UF' =>$_POST['uf'], 'Cidade' =>$_POST['cidade'], 'Bairro' =>$_POST['bairro'], 'Logradouro' =>$_POST['logradouro'], 'Complemento' =>$_POST['complemento'], 'Número' =>$_POST['numero']);
            foreach($dados as $dado => $valor){
                echo $dado .": ". $valor ."<br />";
            }
        }
    ?>

</body>
</html>