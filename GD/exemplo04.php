<?php 

header ("Content-type: image/jpeg"); 

$file = "wallpaper.jpg"; 

$new_width = 256; //largura
$new_height = 256; //altura

list($old_width, $old_height) = getimagesize($file); 

//carrega paleta de cores de 16 milhões de cores
$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file); 

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $$new_width, $new_height, $src_w, $src_h); 

imagejpeg($new_image);

imagedestroy($old_image); 
imagedestroy($new_image);

?>