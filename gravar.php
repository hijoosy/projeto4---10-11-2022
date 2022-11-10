<?php

// PASSO - 1 pegar os dados da tela
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$dtcadastro= date ("y-m-d"); //padrão do banco

// PASSO 2 - montar a conexão com o banco de dados 
include_once'./conexao.php';

// PASSO 3 - montar o sql de gravar no banco
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

// PASSO 4 - mandar esse comando para o mysql
if (mysqli_query($con,$sql)) {
 $msg= "Cadastrado com sucesso";
} else {
    $msg= "Erro ao cadastrar!";
}

mysqli_close($con);
echo"<script> alert('".$msg."'); location.href='index.php'; </script>";


?>