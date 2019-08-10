<?php

spl_autoload_register (function($nameClass){

    var_dump($nameClass);

    $dirClass = "class"; // para procurar o diretorio de classe 
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"); //Se refere a todo nome do arquivo é o PATH 

    if(file_exists($filename)){  //para verificar se o arquivo existe

        require_once($filename);
    }


});


?>