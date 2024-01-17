<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'form';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword, $dbName)

if($conexao-> connect_errno)
{
    echo "Erro na conexão";
}
else
{
    echo "Conexão bem sucedida"
}

?>