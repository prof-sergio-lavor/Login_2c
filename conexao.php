<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "infor2";

    $conexao = new mysqli($host,$usuario,$senha,$banco);

    if($conexao->error){
        die("conexao falhou". $conexao->error);
    } else {
        echo"conexão bem sucedida";
    }
?>