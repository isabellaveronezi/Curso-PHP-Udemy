<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234"); 

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)"); 

$login = "Adison"; 
$password = "1234"; 

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password); 

$stmt->execute(); 

    echo "Dados inseridos com sucesso"; 

?>