<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro(); 

$cad->setNome("Adison Rocha"); 
$cad->setEmail("adison.rocha@gmail.com");
$cad->setSenha("123456"); 

$cad->registrarVenda();


?>