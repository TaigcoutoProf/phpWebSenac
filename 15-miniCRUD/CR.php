<?php
    $conexao = mysqli_connect('localhost','root','1234','lista_tarefas');
    //CREATE
    if ($_POST['tarefa']) mysqli_query($conexao,"INSERT INTO tarefas (nome) VALUES ('{$_POST['tarefa']}')");
    //READ
    $resultado = mysqli_query($conexao,"SELECT * FROM tarefas");

?>


<form method="POST">

    <input type="text" name="tarefa" placeholder="Insira sua tarefa">
    <button type="submit">Inserir</button>
</form>

<?php while($tarefa = mysqli_fetch_assoc($resultado)):   ?>
    <p>
        <?= $tarefa['nome'] ?>
    </p>

<?php endwhile;   ?>




