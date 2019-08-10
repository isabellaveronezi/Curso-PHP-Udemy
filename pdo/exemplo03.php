<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234"); 

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); 

$login = "Isabella"; 
$password = "78945"; 
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password); 
$stmt->bindParam(":ID", $id); 

$stmt->execute(); 

    echo "Dados alterados com sucesso"; 

?>