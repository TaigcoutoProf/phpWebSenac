<?php
function caminho_json() {
    return __DIR__ . '/../data/gastos.json';
}

function ler_gastos() {
    if (!file_exists(caminho_json())) return [];
    return json_decode(file_get_contents(caminho_json()), true) ?? [];
}

function salvar_gastos($gastos) {
    file_put_contents(
        caminho_json(),
        json_encode($gastos, JSON_PRETTY_PRINT)
    );
}
