<?php

if (!is_dir("images"))mkdir("images"); 

    foreach (scandir("images") as $item) {
        /*Esse !in_array significa o que não pode conter dentro do array*/ 
        if (!in_array($item, array(".", ".."))); 

            unlink("images/" . $item); 

            echo "OK!"; 
    }




?>