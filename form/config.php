<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'presenca@1a1';
    $dbName = 'form';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno){
    //    echo "erro";
    //}else{
    //    echo "conexao efetuada com sucesso";
    // }

?>