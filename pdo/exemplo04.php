<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234"); 

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); 

$id = 5;

$stmt->bindParam(":ID", $id); 

$stmt->execute(); 

    echo "Dados excluidos com sucesso"; 

?>