<?php

$dbHost = 'localhost';
$dbUsername = 'id21746911_root';
$dbPassword = '#Root123';
$dbName = 'id21746911_form';

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