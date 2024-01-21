<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Verifica se o nome inserido já existe
        $check_query = "SELECT * FROM formulario WHERE nome = '$nome'";
        $check_result = mysqli_query($conexao, $check_query);

        if(mysqli_num_rows($check_result) > 0) {
            // Caso o nome exista, envia um aviso
            echo '<script>alert("Username already exists. Please choose a different username.");</script>';
        } else {
            // Caso contrário, procede com a inserção
            $result = mysqli_query($conexao, "INSERT INTO formulario (nome, senha) VALUES ('$nome', '$senha')");

            if($result) {
                header('Location: login.php'); //quando os dados são inseridos na database, redireciona para a pagina login
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_register.css">
    <link rel="icon" href="../Projeto_TPI\images\favicon.ico" type="image/x-icon">
    <title>V0ID Clothing</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="title"><h1>Register</h1></div>  
            <div class="content">
                <div class="error-message">
                </div>
                <form action="register.php" method="POST">
                    <fieldset>
                        <div class="inputBox" id="aaa">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput"> Username </label>
                        </div>
                        <div class="inputBox" id="bbb">
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelInput"> Password </label>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Register">
                    </fieldset>
                </form>
            </div>
            <div class="already-account">
                <p> Already have an account? <a href="login.html"> Login </a></p>
            </div>
            <div class="go-back">
                <a href="index.html"> GO BACK </a>
            </div>        
        </div>
    </main>
</body>
</html>
