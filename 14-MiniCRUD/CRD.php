<?php
    $conexao = mysqli_connect('localhost','root','1234','lista_tarefas');

    if ($_POST['tarefa'])   mysqli_query($conexao, "INSERT INTO tarefas (nome) VALUES ('{$_POST['tarefa']}')");
    if ($_GET['deletar'])   mysqli_query($conexao, "DELETE FROM tarefas WHERE id = {$_GET['deletar']}");

    $resultado = mysqli_query($conexao, "SELECT * FROM tarefas");
?>

<form method="POST">
    <input type="text" name="tarefa">
    <button type="submit">Inserir</button>
</form>

<?php while ($tarefa = mysqli_fetch_assoc($resultado)): ?>

    <p>
        <?= $tarefa['nome'] ?>

        <a href="?deletar=<?= $tarefa['id'] ?>">✕</a>

        <button>✏️</button>

    </p>

<?php endwhile; ?>