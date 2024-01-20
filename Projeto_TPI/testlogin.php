<?php
session_start();

//print_r($_REQUEST);

    if(isset($P_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
    {
        // consegue aceder
        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM form WHERE nome = '$nome' and senha = '$senha'";

        $result = $conexao->query($sql); //conexao feita no config.php

        if(mysqli_numrows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);;
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: index.html');
        }
    }
    else
    {
        // não consegue aceder
        header('Location: login.php')
    }
?>