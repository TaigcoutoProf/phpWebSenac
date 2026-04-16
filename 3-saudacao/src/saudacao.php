<?php

date_default_timezone_set("America/Sao_Paulo");

function gerarSaudacao($nome){
    $hora = date("H");

    if($hora<12){
        $mensagem = "Bom dia";
    }elseif($hora <18){
        $mensagem = "Boa tarde";
    }else{
        $mensagem = "Boa noite";
    }

    return "$mensagem, $nome! Hoje é " . date("d/m/Y");
}