<?php

session_start(); 

//depois de verificar login e senha reinicie o ID da sessão
session_destroy();

session_start(); 

//toda vez que atualiza a pagina ele da um novo ID de sessão
session_regenerate_id();

echo session_id(); 



?>