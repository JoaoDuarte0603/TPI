<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once('config.php');
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Recebe os valores POST dos campos "nome" e "senha"
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Cria a query onde verifica na tabela a existência do nome e senha inseridos
    $sql = "SELECT * FROM formulario WHERE nome = '$nome' AND senha = '$senha'";

    // Executa a query e guarda os resultados
    $result = $conexao->query($sql);

    // Verifica de a query foi bem sucedida
    if ($result) {

        // Verifica se existem valores
        if ($result->num_rows > 0) {

            // Case seja bem sucedido, redireciona para a página index e termina o código
            header('Location: index.html');
            $conexao->close();
            exit();
        }
    }

    // Fecha a conexão à base de dados
    $conexao->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Projeto_TPI\images\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles_login.css">
    <title> V0ID Register </title>
</head>
<body>
    <main>
        <div class="container">
            <div class="title"><h1>Login</h1></div>  
            <div class="content">
                <form action="login.php" method="POST">
                    <fieldset>
                        <div class="inputBox" id="aaa">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput"> Username </label>
                        </div>
                        <div class="inputBox" id="bbb">
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelInput"> Password </label>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Login">
                    </fieldset>
                </form>
            </div>
            <div class="already-account">
                <p> Don't have an account? <a href="register.html"> Register </a></p>
            </div>
            <div class="go-back">
                <a href="index.html"> GO BACK </a>
            </div>        
        </div>
    </main>
</body>
</html>