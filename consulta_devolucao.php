<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Consulta de Devolução </title>
</head>

<body>
    <div class="container">
        <h1>Consulta de Devolução</h1>
        <br>

        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>Id Devolucao</th>
                    <th>Id Emprestimo</th>
                    <th>Id Usuario</th>
                    <th>Data Entrega</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include "conexao.php";

                    $sql = "SELECT * FROM devolucao ";

                    $dados = mysqli_query($con, $sql);

                    while ($linha = mysqli_fetch_array($dados)) {
                        $id_devolucao = $linha['id_devolucao'];
                        $id_emprestimo = $linha['id_emprestimo'];
                        $id_usuario = $linha['id_usuario'];
                        $data_entrega = $linha['data_entrega'];

                        echo   "<tr>
                                    <td>$id_devolucao</td>
                                    <td>$id_emprestimo</td>
                                    <td>$id_usuario</td>
                                    <td>$data_entrega</td>
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