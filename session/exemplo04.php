<?php

session_id ('j8cagigkvba8cj0upeute4tq66'); 

require_once ("config.php"); 

session_regenerate_id(); // gera um novo id de sessão a cada refresh na pagina

    echo session_id(); 

var_dupm($_SESSION);


?>