<?php

$qualSuaIdade = 25; 

$idadeCrianca = 12; 
$idadeMaior = 18;
$idadeMelhor = 65; 

if ($qualSuaIdade < $idadeCrianca) {

	echo "Criança"; 


} 	else if ($qualSuaIdade < $idadeMaior) { 

 	echo "Adolecente"; 	

}	else if ($qualSuaIdade < $idadeMelhor) { 

	echo "Adulto"; 

} 	else {

	echo "Idoso"; 
} 

	echo "<br>"; 

	echo ($qualSuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade"; //Funciona da mesma forma do if e else, ele é muito utilizado para condição simples 





?> 