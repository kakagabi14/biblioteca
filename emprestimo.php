<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Emprestimo</title>
</head>

<body>
    <div class="container">
        <h1>Emprestimo</h1>
        <br>
        <form action="emprestimo.php" method="post">
            <label>Id Livro:</label>
            <input type="number" name="id_livro" required>
            <br>
            <label>Id Cliente:</label>
            <input type="number" name="id_cliente" required>
            <br>   
            <label>Id Usuario</label>
            <input type="number" name="id_usuario" required>
            <br>
            <label>Data Emprestimo</label>
            <input type="date" name="data_emprestimo" required>
            <br>
            <label>Data Expiracao</label>
            <input type="date" name="data_expiracao" required>
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
        $id_livro = $_POST['id_livro'];
        $id_cliente =  $_POST['id_cliente'];
        $id_usuario =  $_POST['id_usuario'];
        $data_emprestimo =  $_POST['data_emprestimo'];
        $data_expiracao = $_POST['data_expiracao'];
        
        

        include "conexao.php";

        $sql = "INSERT INTO `emprestimo`(`id_livro`, `id_cliente`,`id_usuario`,`data_emprestimo`,`data_expiracao`)
                VALUES ('$id_livro','$id_cliente','$id_usuario','$data_emprestimo','$data_expiracao')";

            if (mysqli_query($con, $sql)){
                echo "Emprestimo feito com sucesso!!";
            } else{
                echo "Erro no cadastro!";
            }
    }
?>