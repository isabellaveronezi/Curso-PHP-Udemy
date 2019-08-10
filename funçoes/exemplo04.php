<?php

function hello(){ 

    $argument = func_get_args(); // retorna todos os argumentos que foram passados como parametro 

    return $argument; 

}

var_dump(hello("good morning", 10)); 

?>