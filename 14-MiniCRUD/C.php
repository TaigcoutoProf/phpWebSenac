<?php
    $conexao = mysqli_connect('localhost','root','1234','lista_tarefas');

    if ($_POST['tarefa'])   mysqli_query($conexao, "INSERT INTO tarefas (nome) VALUES ('{$_POST['tarefa']}')");

?>

<form method="POST">
    <input type="text" name="tarefa">
    <button type="submit">Inserir</button>
</form>

