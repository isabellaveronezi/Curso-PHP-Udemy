<?php 

include "inc/exemplo01.php"; // O include tenta funcionar mesmo que o arquivo não exista e esteja com algum problema, além de ter mais recursos, tem o diretorio do include que permite que ele traga arquivos.

require "inc/exemplo01.php"; // O require obriga que o arquivo que esteja incluindo exista e esteja funcionando corretamente 

require_once "inc/exemplo01.php"; // ele permite que você não chame o arquivo mais de uma vez, ele ignora a segunda chamada e evita erro. (Funciona na mesma função do require)

include_once "inc/exemplo01.php"; // mesma funcionalidade do include, porém evita de chamar o arquivo mais de uma vez igual o require_once.

$resultado = somar(10, 20); 

	echo $resultado

?> 