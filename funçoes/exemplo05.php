<?php

$a = 10; 

function exchangeValue(&$a){   

    // & passagem de parâmetro por referência

    $a += 50; 

    return $a; 

}

    echo exchangeValue($a); 

    echo "<br>"; 

    echo $a; 


    // o que acontece dentro da função fica dentro da função. 
    // ou seja a variavel dentro da função tem um valor e a fora da função outro valor

?>