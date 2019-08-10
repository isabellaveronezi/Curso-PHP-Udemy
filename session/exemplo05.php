<?php

require_once ("config.php"); 

    echo session_save_path(); // Obtém e/ou define o caminho para armazenamento da sessão atual

        echo "<br>";

    var_dump (session_status()); //Retorna o status atual da sessão

        echo "<br>";

    switch(session_status()) { 

        case PHP_SESSION_DISABLED: 
        echo "Se as sessões estiverem desabilitadas "; 
        break; 

        case PHP_SESSION_NONE:  
        echo "Se as sessões estiverem habilitadas, mas nenhuma existir"; 
        break; 

        case PHP_SESSION_ACTIVE:  
        echo "Se as sessões estiverem habilitadas, e uma existir.";
        break;
    
    
    
    
    }

?>