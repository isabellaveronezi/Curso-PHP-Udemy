<?php

try { 
    /*Estourar uma exceção*/ 
    throw new Exception("Houve um erro.", 400); 
    
    /* A variavel $e armazena o erro */
} catch(Exception $e) { 

    echo json_encode(array(
        "message"=>$e->getMessage(), 
        "line"=>$e->getLine(), 
        "file"=>$e->getFile(), 
        "code"=>$e->getCode()
    ));
}

?>