<?php

$filename = "usuarios.csv"; 

/*para verificar se existe*/ 
if(file_exists($filename)); {

    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));

    $data = array(); 
        /* o while está percorrendo apenas as linhas */ 
        while($row = fgets($file)) {

            $rowData = explode(",", $row); 
            $linha = array(); 
            /* o for percorre todas as linhas do while e as colunas*/ 
            for ($i = 0; $i < count($headers); $i++){

                $linha[$headers[$i]] = $rowData[$i]; 

            }

            array_push($data, $linha); 

        }

    fclose($file); 

    echo json_encode($data); 
 
}

?> 