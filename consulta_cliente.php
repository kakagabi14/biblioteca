<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Consulta de Cliente</title>
</head>

<body>
    <div class="container">
        <h1>Consulta de Cliente</h1>
        <br>

        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>Id_Cliente</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
                    <th>Email</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "conexao.php";

                    $sql = "SELECT * FROM cadastro_cliente ";

                    $dados = mysqli_query($con, $sql);

                    while ($linha = mysqli_fetch_array($dados)) {
                        $id_cliente = $linha['id_cliente'];
                        $nome = $linha['nome'];
                        $telefone = $linha['telefone'];
                        $endereco = $linha['endereco'];
                        $email = $linha['email'];
                        $cpf = $linha['cpf'];

                        echo   "<tr>
                                    <th>$id_cliente</th>
                                    <th>$nome</th>
                                    <td>$telefone</td>
                                    <td>$endereco</td>
                                    <td>$email</td>
                                    <td>$cpf</td>
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