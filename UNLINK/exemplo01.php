<?php

$file = fopen("teste.text", "w+"); 

fclose ($file); 

unlink("teste.txt"); 

    echo "Arquivo removido com sucesso"; 
?>