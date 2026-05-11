<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Área Restrita</h1>
    <p>Bem-vindo, <?= $_SESSION['user'] ?></p>

    <a href="logout.php">Sair</a>
</div>

</body>
</html>