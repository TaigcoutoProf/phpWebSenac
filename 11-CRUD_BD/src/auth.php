<?php
session_start();
require_once __DIR__ . "/conexao.php";

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);

if ($row = mysqli_fetch_assoc($resultado)) {

    if ($row['senha'] === $senha) {

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_nome'] = $row['nome'];
        $_SESSION['user_email'] = $row['email'];

        header("Location: ../public/dashboard.php");
        exit;
    }else {
        echo "senha incorreta";
    }

}else{
    echo "Usuário não encontrado";
}

