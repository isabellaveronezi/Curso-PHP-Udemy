<?php


$frase = "A repetição é a mãe da retenção";

$palavra = "mãe"; 

$q = strpos($frase, "mãe"); // função procura dentro da variavel o nome especificado 

$texto = substr($frase, 0, $q); // função que especifica antes da palavra mãe (ou seja você define até que caracter quer que sua busca seja feita)

	var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

	var_dump($texto2); 
	


?> 