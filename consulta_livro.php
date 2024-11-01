<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Consulta do Livro</title>
</head>

<body>
    <div class="container">
        <h1>Consulta do Livro</h1>
        <br>

        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Ano de Publicação</th>
                    <th>Quantidade</th>
                    <th>Genero</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "conexao.php";

                    $sql = "SELECT * FROM cadastro_livro";

                    $dados = mysqli_query($con, $sql);

                    while ($linha = mysqli_fetch_array($dados)) {
                        $isbn = $linha['isbn'];
                        $titulo = $linha['titulo'];
                        $autor = $linha['autor'];
                        $ano_publicacao = $linha['ano_publicacao'];
                        $quantidade = $linha['quantidade'];
                        $genero = $linha['genero'];

                        echo   "<tr>
                                    <th>$isbn</th>
                                    <td>$titulo</td>
                                    <td>$autor</td>
                                    <td>$ano_publicacao</td>
                                    <td>$quantidade</td>
                                    <td>$genero</td>
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