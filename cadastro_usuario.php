<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <br>
        <form action="cadastro_usuario.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label>Telefone:</label>
            <input type="text" name="telefone" required>
            <br>
            <label>Endereço:</label>
            <input type="text" name="endereco" required>
            <br>
            <label>CPF:</label>
            <input type="text" name="cpf" required>
            <br>
            <label>Email:</label>
            <input type="text" name="email" required>
            <br>
            <label>Username:</label>
            <input type="text" name="username" required>
            <br>
            <label>Senha:</label>
            <input type="text" name="senha" required>
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
        $email = $_POST['email'];
        $username =  $_POST['username'];
        $senha =  $_POST['senha'];
        

        include "conexao.php";

        $sql = "INSERT INTO `cadastro_usuario`(`nome`, `telefone`,`endereco`,`cpf`,`email`, `username`,`senha`)
                VALUES ('$nome','$telefone','$endereco','$cpf','$email','$username','$senha')";

            if (mysqli_query($con, $sql)){
                echo "Usuario cadastrado com sucesso!!";
            } else{
                echo "Erro no cadastro!";
            }
    }
?>