<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Consulta de Empréstimo</title>
</head>

<body>
    <div class="container">
        <h1>Consulta de Empréstimo</h1>
        <br>

        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>Id Empréstimo</th>
                    <th>Id Livro</th>
                    <th>Id Cliente</th>
                    <th>Id Usuario</th>
                    <th>Data Emprestimo</th>
                    <th>Data Expiracao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "conexao.php";

                    $sql = "SELECT * FROM emprestimo ";

                    $dados = mysqli_query($con, $sql);

                    while ($linha = mysqli_fetch_array($dados)) {
                        $id_emprestimo = $linha['id_emprestimo'];
                        $id_livro = $linha['id_livro'];
                        $id_cliente = $linha['id_cliente'];
                        $id_usuario = $linha['id_usuario'];
                        $data_emprestimo = $linha['data_emprestimo'];
                        $data_expiracao = $linha['data_expiracao'];

                        echo   "<tr>
                                    <th>$id_emprestimo</th>
                                    <td>$id_livro</td>
                                    <td>$id_cliente</td>
                                    <td>$id_usuario</td>
                                    <td>$data_emprestimo</td>
                                    <td>$data_expiracao</td>
                                </tr>";
                    }
                ?>
            </tbody>
        </table>

        <a href="inicial.html">Voltar</a>

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
</body>

</html>