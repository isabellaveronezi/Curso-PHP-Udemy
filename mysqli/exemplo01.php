<?php

$conn = new mysqli("localhost", "root", "1234","dbphp7");

if($conn->connect_error) { // Para indentificar se houve algum erro na conexão

    echo "Error: " . $conn->connect_error; 

}  

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)"); /* inserindo valores
                                                                                        no banco atraves 
                                                                                        do PHP. */

$stmt->bind_param("ss", $login , $pass);

$login = "user"; 
$pass = "12345";

$stmt->execute();

$login = "root"; 
$pass= "!@#$%"; 

$stmt->execute(); 

?>