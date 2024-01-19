<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['senha']);



        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_register.css">
    <title> V0ID Register </title>

</head>
<body>
    <div class="box">
        <form action="register.php" method="POST">
        <fieldset>
    <legend><b> Register </b></legend>
        <br>
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput"> Username </label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelInput"> Password </label>
        </div>
    
        <br><br>
            <input type="submit" name="submit" id="submit" value="Submit">
        </fieldset>

            <div class="already-account">
                <p> Already have an account? <a href="login.html"> <span> Login </span></a></p>
            </div>
            <div class="go-back">
                <span><a href="Index.html"> GO BACK </a></span> 
            </div>
        </form>
    </div>
</body>
</html>