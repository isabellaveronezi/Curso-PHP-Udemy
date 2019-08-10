<?php

function sum(int ... $values) { 
    return array_sum($values); 
}

    echo var_dump(sum(2,2));
    echo "<br>";
    echo sum (25, 33);
    echo "<br>"; 
    echo sum (1, 3); 
    echo "<br>"; 
?> 