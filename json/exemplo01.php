<?php
 
 $pessoas = array(); 

 array_push($pessoas, array(
     'nome' => 'João', 
     'idade' => 28

 )); 

 array_push($pessoas, array(
    'nome' => 'Isabella', 
    'idade' => 23

)); 

 echo json_encode($pessoas); 


?> 