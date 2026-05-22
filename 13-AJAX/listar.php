<?php

include_once __DIR__ . ("/conexao.php");

$sql = "SELECT * FROM usuarios";

$resultado = $conexao->query($sql);

$usuarios = [];

while($linha = $resultado->fetch_assoc()){

    $usuarios[] = $linha;

}

echo json_encode($usuarios);

?>