<?php
session_start();

require_once __DIR__ . "/conexao.php";

$id = $_SESSION['user_id'];
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);


$sql = "UPDATE usuarios SET
    nome = '$nome',
    email = '$email'
    WHERE id = $id";

if(mysqli_query($conexao,$sql)){
    $_SESSION['user_nome'] = $nome;
    header("Location: ../public/dashboard.php");
    exit;
}else{
    echo "Erro ao atualizar dados";
}
