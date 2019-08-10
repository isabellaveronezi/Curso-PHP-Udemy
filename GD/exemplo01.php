<?php

//mudar o tipo de resposta do arquivo 
header("Content-Type: image/png");

//criando uma imagem (largura x altura)
$image = imagecreate(256, 256); 

//criando paleta de cores (Padrão RGB)
//primeira cor que se cria vira a cor de fundo 
$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

//para escrever na tela 
// tamano da fonte (5) (eixo x(60) e y(120) )
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

//indicar qual o formato deve ser gerado. o PHP desenha o que foi programado 
imagepng($image);

//destruir a varável resource, se não ela fica pendura no PHP 
imagedestroy($image); 




?>