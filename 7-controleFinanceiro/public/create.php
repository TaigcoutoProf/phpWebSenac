<?php
require_once __DIR__ . '/../src/repositorio.php';

$data = $_POST['data'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$valor = $_POST['valor'] ?? '';
$tipo = $_POST['tipo'] ?? '';

if ($data && $descricao && $valor && $tipo) {
    $gastos = ler_gastos();

    $gastos[] = [
        'id' => uniqid(),
        'data' => $data,
        'descricao' => $descricao,
        'valor' => (float)$valor,
        'tipo' => $tipo
    ];

    salvar_gastos($gastos);
}

header('Location: index.php');
exit;
