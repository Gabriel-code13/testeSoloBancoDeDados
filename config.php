<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '1234';
    $dbName = 'usuario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "erro";
    //}
    //else
    //{
    //    echo "conexão efetuada com sucesso";
    //}

?>