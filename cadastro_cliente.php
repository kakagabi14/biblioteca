<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <br>
        <form action="cadastro_cliente.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label>Telefone:</label>
            <input type="text" name="telefone" required>
            <br>
            <label>Endereço:</label>
            <input type="text" name="endereco" required>
            <br>
            <label>Email:</label>
            <input type="text" name="email" required>
            <br>
            <label>CPF:</label>
            <input type="text" name="cpf" required>
            <br>
            <a href="inicial.html"><button type="submit">Cadastrar</button></a>
        </form>
        <a href="inicial.html"><button>Voltar</button></a>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
    </div>

    <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

</body>

</html>

<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nome = $_POST['nome'];
        $telefone =  $_POST['telefone'];
        $endereco =  $_POST['endereco'];
        $cpf =  $_POST['cpf'];
        $email =  $_POST['email'];
        include "conexao.php";

        $sql = "INSERT INTO `cadastro_cliente`(`nome`,`telefone`, `endereco`,`email`, `cpf`)
                VALUES ('$nome','$telefone','$endereco','$email','$cpf')";

            if (mysqli_query($con, $sql)){
                echo "Cliente cadastrado com sucesso!!";
            } else{
                echo "Erro no cadastro!";
            }
    }
?>