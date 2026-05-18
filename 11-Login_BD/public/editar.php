<?php
session_start();

require_once __DIR__ . "../../src/conexao.php";

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";

$result = mysqli_query($conexao, $sql);

$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Editar dados</title>
</head>
<body>
        <div class="container">
            <h1>Editar Informações</h1>

            <form action="../src/atualizar.php" method="POST">
                    <input type="text" name="nome" value="<?= $user['nome'] ?> " required>
                    <input type="text" name="email" value="<?= $user['email'] ?> " required>
                    
                    <button type="submit"> Atualizar </button>

            </form>

            <a href="dashboard.php">Voltar</a>
        </div>
</body>
</html>

