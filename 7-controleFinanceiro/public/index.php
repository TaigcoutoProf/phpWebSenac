<?php
require_once __DIR__ . '/../src/repositorio.php';
$gastos = ler_gastos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Controle Financeiro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h1>Controle Financeiro</h1>
<h2>Novo gasto</h2>

<form method="POST" action="create.php">
  <label>Data
    <input type="date" name="data">
  </label><br><br>

  <label>Descrição
    <input type="text" name="descricao">
  </label><br><br>

  <label>Valor
    <input type="text" name="valor">
  </label><br><br>

  <label>Tipo
    <select name="tipo">
      <option value="">Selecione</option>
      <option value="Entrada">Entrada</option>
      <option value="Saída">Saída</option>
    </select>
  </label><br><br>

  <button type="submit">Salvar</button>
</form>

<h2>Gastos cadastrados</h2>


<table>
  <tr>
    <th>Data</th>
    <th>Descrição</th>
    <th>Tipo</th>
    <th>Valor</th>
    <th>Ações</th>
  </tr>

  <?php foreach ($gastos as $g): ?>
    <tr>
      <td><?php echo $g['data']; ?></td>
      <td><?php echo $g['descricao']; ?></td>

      <td class="<?php echo strtolower($g['tipo']); ?>">
        <?php echo $g['tipo']; ?>
      </td>

      <td>
        R$ <?php echo number_format($g['valor'], 2, ',', '.'); ?>
      </td>

      
        <td>
        editar.php?id=<?php echo $g['id']; ?>Editar</a>

        excluir.php">
            <input type="hidden" name="id" value="<?php echo $g['id']; ?>">
            <button type="submit">Excluir</button>
        </form>
        </td>


    </tr>
  <?php endforeach; ?>
</table>


</div>
</body>
</html>