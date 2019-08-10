
<form method="POST" enctype="multipart/form-data">


    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

<?php

/* Guarda o tipo da solicitação se é get, post */
if($_SERVER["REQUEST_METHOD"] === "POST") { 

        //Array superglobal
$file = $_FILES["fileUpload"]; 

    if($file["error"]) { 
        /* permite que você gere uma nova excessão ou seja force um erro dentro do php*/
        throw new Exception("Error: " .$file["error"]); 


    }

    $dirUploads = "uploads"; 

    if(!is_dir($dirUploads)) {

        mkdir($dirUploads); 
    }

   if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . 
    $file["name"])){ 

        echo "Upload realizado com sucesso"; 


   } else { 

        throw new Exception("Não foi possível realizar o upload."); 
   }
}

?>