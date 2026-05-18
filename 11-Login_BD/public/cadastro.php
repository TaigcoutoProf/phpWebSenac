<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro de usuário</h1>
        <form action="../src/cadastrar.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Salvar</button>
        </form>
        <a href="index.php">Voltar para login</a>
    </div>
</body>
</html>