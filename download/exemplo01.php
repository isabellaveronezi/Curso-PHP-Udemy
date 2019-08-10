<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);
/*recebe o arquivo criando o arquivo, onde está gerando o nome do arquivo*/
/*pode ser alterado o nome do arquivo*/ 
$file = fopen($basename, "w+"); 
/*aqui foi gerado a copia do arquivo, onde está escrevndo no disco rigido*/
fwrite($file, $content); 

fclose($file); 

?>

<img src ="<?=$basename?>">

