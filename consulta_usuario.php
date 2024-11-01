<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Consulta de Usuário</title>
</head>

<body>
    <div class="container">
        <h1>Consulta de Usuario</h1>
        <br>

        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "conexao.php";

                    $sql = "SELECT * FROM cadastro_usuario ";

                    $dados = mysqli_query($con, $sql);

                    while ($linha = mysqli_fetch_array($dados)) {
                        $id_usuario = $linha['id_usuario'];
                        $nome = $linha['nome'];
                        $telefone = $linha['telefone'];
                        $endereco = $linha['endereco'];
                        $cpf = $linha['cpf'];
                        $email = $linha['email'];
                        $username = $linha['username'];
                        $senha = $linha['senha'];

                        echo   "<tr>
                                    <th>$id_usuario</th>
                                    <td>$nome</td>
                                    <td>$telefone</td>
                                    <td>$endereco</td>
                                    <td>$cpf</td>
                                    <td>$email</td>
                                    <td>$username</td>
                                    <td>$senha</td>
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