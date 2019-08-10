<?php

require_once("config.php"); 

$sql = new Sql(); 

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin"); 

$headers = array(); 

/* é ralizado um foreach do array da variavel $usuarios para passar coluna por coluna 
o $key vai retornar nome da coluna e o valor da coluna em $value */
foreach ($usuarios [0] as $key => $value) {
/*trata array como uma pilha, e adiciona as variáveis passadas como argumentos no final de array. 
O tamanho do array aumenta de acordo com o número de variáveis adicionadas */
    array_push($headers, ucfirst($key), $value);  
}

$file = fopen("usuarios.csv", "w+"); 

fwrite($file, implode(",", $headers) . "\r\n");

/*se refere as linhas ($row)*/
foreach ($usuarios as $row) { 
    $data = array(); 
    /* esse nos campos, toda vez que ele entra na primeira linha, ele faz as colunas*/
        foreach ($row as $key => $value) { 
            array_push($data, $value); 
        } //End foreach coluna

        fwrite($file, implode(",", $data). "\r\n"); 
/*end o foreach de linha */ 
}


fclose ($file);




?>