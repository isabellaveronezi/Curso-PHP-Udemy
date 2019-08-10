<?php

$nome = "Isabella"; 

function teste() { 

	global $nome;
	echo $nome;

}

function teste2() {


	$nome = leonardo;

	
	echo $nome. "agora no teste2";

}

teste();
teste2(); 

?>