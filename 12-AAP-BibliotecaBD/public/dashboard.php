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


<?php
require_once __DIR__ . '/../src/repositorio.php';

$livros = ler_livros();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Biblioteca - Cadastro de livros</h1>
            <a href="create.php" class="btn btn-primary"> + Novo livro</a>
        </header>
     <div class="card">
        <strong>Total de Livros</strong> <?php echo count($livros);?>
    </div>

    <?php if(count($livros)===0):?>
    <div class="alert"> Ainda não existem livros cadastrados. Clique em <strong>"+ novo livro"</strong></div>
    <?php else:?>
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Ano</th>
        </tr>
    <?php foreach ($livros as $l): ?>
        <tr>
            <td><?php echo e($l['titulo']); ?></td>
            <td><?php echo e($l['autor']); ?></td>
            <td><?php echo e($l['isbn']); ?></td>
            <td><span class="badge badge-ano"><?php echo e($l['ano']); ?></span></td>

            <td class="acoes">
                <a class="btn btn-primary" href="update.php?id=<?php echo $l['id'];?>" >Editar</a>
                <form action="delete.php" method="POST" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $l['id'];?>">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Excluir este livro?')">
                    Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </table>
    <?php endif;?>

    <p class="footer">Dados guardados em <code>data/livros.json</code></p>
    </div>
</body>
</html>