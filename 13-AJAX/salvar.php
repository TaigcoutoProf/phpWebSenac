<?php

include_once __DIR__ . ("/conexao.php");

$json = file_get_contents("php://input");

$dados = json_decode($json, true);

$nome = $dados["nome"];
$email = $dados["email"];
$idade = $dados["idade"];
$cidade = $dados["cidade"];

$sql = "INSERT INTO usuarios(nome,email, idade, cidade)
VALUES('$nome', '$email', '$idade', '$cidade')";

$conexao->query($sql);

echo json_encode([
    "mensagem" => "Usuário cadastrado com sucesso!"
]);

?>