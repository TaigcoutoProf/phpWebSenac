<?php
if (isset($_GET['nome']) && isset($_GET['curso'])){
    echo "Nome: " . $_GET['nome'] . "<br>";
    echo "Curso: " . $_GET['curso'] . "<br>";
}else{
    echo "Dados incompletos";
}