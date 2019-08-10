<?php

$conn = new mysqli("localhost", "root", "1234","dbphp7"); //conectando no banco

if($conn->connect_error) { // Para indentificar se houve algum erro na conexão

    echo "Error: " . $conn->connect_error; 

}  

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin"); 

$data = array(); 

while ($row = $result->fetch_array ()) {

    array_push($data, $row); 

   
}
    echo json_encode($data);


?>