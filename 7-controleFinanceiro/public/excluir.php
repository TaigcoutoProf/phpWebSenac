<?php
require_once __DIR__ . '/../src/repositorio.php';

$id = $_POST['id'] ?? '';
$gastos = ler_gastos();

$novo = [];

foreach ($gastos as $g) {
    if ($g['id'] !== $id) {
        $novo[] = $g;
    }
}

salvar_gastos($novo);
header('Location: index.php');
exit;