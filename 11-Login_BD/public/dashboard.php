<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>Área Restrita</h1>
    <p>Bem-vindo, <?= $_SESSION['user_nome'] ?></p>

    <a href="editar.php">Editar</a>
    <a href="logout.php">Sair</a>
</div>

</body>
</html>