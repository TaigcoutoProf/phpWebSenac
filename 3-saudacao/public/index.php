<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo dinâmico PHP</title>
</head>
<body>
    <h1>Sistema de saudação</h1>
    <form method="POST">
        Nome: 
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            include "../src/saudacao.php";

            echo gerarSaudacao($nome);
        }
    ?>
</body>
</html>