<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="POST">

        <h1>Login</h1>

        <label>Username</label>
        <input type="text" name="username" required><br>

        <label>Senha</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button><br><br>
        <a href="index.html">Voltar</a>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $senha = $_POST["senha"];

        include "conexao.php";

        $sql = "SELECT *  FROM cadastro_usuario
                WHERE username = '$username'
                AND senha = '$senha'";

        $resultado = mysqli_query($con, $sql);

        if(mysqli_num_rows($resultado)> 0 ){
            echo "Login realizado com sucesso!";
            header('location: inicial.html');
        } else{
            echo "Login inválido!";
            }

    }