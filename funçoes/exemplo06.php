<?php 

$person = array( 
    'name' => 'Leonardo', 
    'age' => '24'
); 

foreach ($person as &$value) { 

        if (gettype($value) === 'integer') $value += 10; // retorno o tipo de dado da variavel gettype

        echo $value. "<br>"; 
}

print_r ($person);


?> 