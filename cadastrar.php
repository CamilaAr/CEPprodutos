<?php

include("funcoes.php");

$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$ibge = filter_input(INPUT_POST, 'ibge', FILTER_SANITIZE_STRING);



echo $produto . "<br>";

echo "nome: " . $nome . " CPF: " . $cpf . "<br>"; 

echo " rua: " . $rua . " bairro: " . $bairro . " complemento: " . $complemento . " numero: " . $numero . " cidade: " . $cidade . " estado: " . $estado . " ibge: " . $ibge . " cep: " . $cep . "<br>";   


cadastrar($nome, $cpf, $cep, $rua, $bairro, $numero, $complemento, $cidade, $estado, $ibge, $produto);