<?php

require_once __DIR__ . "/conexao.php";


$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

$sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../public/index.php");
    exit;
}else{
    echo "Erro ao cadastrar usuário";
}