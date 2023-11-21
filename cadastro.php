<?php 
if(isset($_POST['email'])){
include("conexao.php");


$email = $_POST['email'];
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

$sql = "INSERT INTO cad(email,senha)
value ('$email','$senha')";
}

if(mysqli_query($conexao,$sql)){
    echo "cadastrado com sucesso";
}
else{
    echo" erro ao cadastrar". mysqli_connect_error($conexao);
}
?>