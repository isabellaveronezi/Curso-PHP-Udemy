<?php


//$json = '[{ "nome": "Creme de abacate","ingredientes": ["leite", "açucar", "abacate"],"validade": "Até amanhã"},{"nome": "Bolo de mamão","ingredientes": ["farinha", "leite", "mamão"],"validade": "Até hoje"},{"nome": "Sopa de atum","ingredientes": ["água", "sal, "atum"],"validade": "Já venceu"}]';
$json = '[{ "nome": "Creme de abacate","ingredientes": "leite","validade": "Até amanhã"},{"nome": "Bolo de mamão","ingredientes": "mamão","validade": "Até hoje"},{"nome": "Sopa de atum","ingredientes": "atum","validade": "Já venceu"}]';
$produtos = json_decode($json, true);
var_dump($produtos);

// crio array da validade
foreach($produtos as $value){
    $validade[] = $value['validade'];
}

var_dump($validade);

// removo ultimo elemento do array
$primeiro_elemento = array_pop($validade);

// removo primeiro elemento do array
$ultimo_elemento = array_shift($validade);

var_dump($validade);

?>