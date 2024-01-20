<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Your database connection details
    include_once('config.php');

    // Create a database connection
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check if the connection was successful
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }

    // Get user input
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM formulario WHERE nome = '$nome' AND senha = '$senha'";
    $result = $conexao->query($sql);

    // Check if the query was successful
    if ($result) {
        // Check if a matching user was found
        if ($result->num_rows > 0) {
            // Redirect to index.html
            header('Location: index.html');
            exit(); // Ensure that no more code is executed after the header function
        } else {
            echo "Invalid username or password. <a href='login.html'>Try again</a>";
        }
    } else {
        echo "Error: " . $conexao->error;
    }

    // Close the database connection
    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_login.css">
    <title> V0ID Register </title>
</head>
<body>
    <main>
        <div class="container">
            <div class="title"><h1>Login</h1></div>  
            <div class="content">
                <form action="testlogin.php" method="POST">
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