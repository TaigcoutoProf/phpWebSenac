<?php
    $conexao = mysqli_connect('localhost','root','1234','lista_tarefas');

    if ($_POST['tarefa'])   mysqli_query($conexao, "INSERT INTO tarefas (nome) VALUES ('{$_POST['tarefa']}')");
    if ($_GET['deletar'])   mysqli_query($conexao, "DELETE FROM tarefas WHERE id = {$_GET['deletar']}");
    if ($_POST['novo_nome']) mysqli_query($conexao, "UPDATE tarefas SET nome = '{$_POST['novo_nome']}' WHERE id = {$_POST['id']}");

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

        <button onclick="document.getElementById('form-<?= $tarefa['id'] ?>').style.display='block'">✏️</button>

        <form id="form-<?= $tarefa['id'] ?>" method="POST" style="display:none">
            <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
            <input type="text" name="novo_nome">
            <button type="submit">Salvar</button>
        </form>
    </p>

<?php endwhile; ?>