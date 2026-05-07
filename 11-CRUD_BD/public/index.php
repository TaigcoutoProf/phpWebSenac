<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container">
        <h1>Login</h1>

        <form action="../src/auth.php" method="POST">
            <input type="email" name="email" placeholder="Digite seu email" required>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <button type="submit">Entrar</button>
            <p>
                <a href="cadastro.php">Cadastrar novo usuário</a>
            </p>

        </form>
    </div>

</body>

</html>