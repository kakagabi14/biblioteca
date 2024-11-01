<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Devolução</title>
</head>

<body>
    <div class="container">
        <h1>Devolução</h1>
        <br>
        <form action="devolucao.php" method="post">
            <label>Id Empréstimo:</label>
            <input type="number" name="id_emprestimo" required>
            <br>
            <label>Id Usuário:</label>
            <input type="number" name="id_usuario" required>
            <br>
            <label>Data de Entrega:</label>
            <input type="date" name="data_entrega" required>

            <a href="inicial.html"><button type="submit">Cadastrar</button></a>
        </form>
        <a href="inicial.html"><button>Voltar</button></a>

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
        $id_emprestimo =  $_POST['id_emprestimo'];
        $id_usuario =  $_POST['id_usuario'];
        $data_entrega =  $_POST['data_entrega'];
        
        

        include "conexao.php";

        $sql = "INSERT INTO `devolucao`(`id_emprestimo`,`id_usuario`,`data_entrega`)
                VALUES ('$id_emprestimo','$id_usuario','$data_entrega')";

            if (mysqli_query($con, $sql)){
                echo "Devolução feita com sucesso!!";
            } else{
                echo "Erro no cadastro!";
            }
    }
?>