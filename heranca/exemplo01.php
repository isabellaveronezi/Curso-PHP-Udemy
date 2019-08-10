<?php 

class Documento{ 

    private $numero; 

    public function getNumero(){ 

        return $this->numero; 
    }

    public function setNumero($n){

        $this->numero = $n; 
    }

}

class CPF extends Documento{ 

    public function validar(){

        $numeroCPF = $this->getNumero();

        // validação do CPF

        return true;
    }

}



$doc = new CPF(); 

$doc->setNumero("441227418-74"); 

var_dump($doc->validar());

    echo "<br/>"; 

    echo $doc->getNumero(); 


?>