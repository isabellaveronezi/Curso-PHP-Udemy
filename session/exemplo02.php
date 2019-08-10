<?php

require_once ("config.php"); 

session_unset($_SESSION['nome']); // limpa variavel 

echo $_SESSION ['nome']; 

session_destroy ($_SESSION['nome']); // limpa variavel e remove o usúario
?> 