<?php
session_start();
require "conexao.php";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);

if ($row = mysqli_fetch_assoc($resultado)) {

    if ($row['senha'] === $senha) {

        $_SESSION['user'] = $row['nome'];

        header("Location: ../public/dashboard.php");
        exit;
    }else {
        echo "senha incorreta";
    }

}else{
    echo "Usuário não encontrado";
}

header("Location: ../public/index.php");
exit;