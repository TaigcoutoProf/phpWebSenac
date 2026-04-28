<?php
require_once __DIR__ . '/../src/repositorio.php';

$id = $_GET['id'] ?? '';
$gastos = ler_gastos();

foreach ($gastos as $i => $g) {
    if ($g['id'] === $id) {
        $gasto = $g;
        $posicao = $i;
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gastos[$posicao]['data'] = $_POST['data'];
    $gastos[$posicao]['descricao'] = $_POST['descricao'];
    $gastos[$posicao]['valor'] = (float)$_POST['valor'];
    $gastos[$posicao]['tipo'] = $_POST['tipo'];

    salvar_gastos($gastos);
    header('Location: index.php');
    exit;
} ?>


<form method="POST">
  <input type="date" name="data" value="<?php echo $gasto['data']; ?>">
  <input type="text" name="descricao" value="<?php echo $gasto['descricao']; ?>">
  <input type="text" name="valor" value="<?php echo $gasto['valor']; ?>">
  <select name="tipo">
    <option value="Entrada">Entrada</option>
    <option value="Saída">Saída</option>
  </select>
  <button type="submit">Salvar</button>
</form>