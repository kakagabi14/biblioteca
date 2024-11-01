<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro do Livro</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro</h1>
        <br>
        <form action="" method="post">
            <label>ISBN:</label>
            <input type="number" name="isbn" required>
            <br>
            <label>Título:</label>
            <input type="text" name="titulo" required>
            <br>
            <label>Autor:</label>
            <input type="text" name="autor" required>
            <br>
            <label>Ano de publicação:</label>
            <input type="number" name="ano_publicacao" required>
            <br>
            <label>Quantidade:</label>
            <input type="number" name="quantidade" required>
            <br>
            <label>Gênero::</label>
            <input type="text" name="genero" required>
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
        $isbn = $_POST['isbn'];
        $titulo =  $_POST['titulo'];
        $autor =  $_POST['autor'];
        $ano_publicacao =  $_POST['ano_publicacao'];
        $quantidade =  $_POST['quantidade'];
        $genero =  $_POST['genero'];

        include "conexao.php";

        $sql = "INSERT INTO `cadastro_livro`(`isbn`,`titulo`, `autor`,`ano_publicacao`,`quantidade`, `genero`)
                VALUES ('$isbn','$titulo','$autor','$ano_publicacao','$quantidade','$genero')";

            if (mysqli_query($con, $sql)){
                echo "Livro cadastrado com sucesso!!";
            } else{
                echo "Erro no cadastro!";
            }
    }
?>