<?php

class Carro{ //classe

    private $modelo; // atributo
    private $motor; 
    private $ano; 

    public function getModelo(){ //get: pegar valor

        return $this->modelo; 

    }
    
    public function setModelo($modelo){ //set : muda valor 

        $this->modelo = $modelo;

    }

    public function getMotor(){ 

        return $this->motor; 
    }

    public function setMotor($motor){ 

        $this->motor = $motor;
    }

    public function getAno(){

        return $this->ano; 

    }

    public function setAno($ano){

        $this->ano = $ano;
    }

    public function exibir(){

        return array(
            
            "modelo"=>$this->getModelo(), // Pegar o valor do modelo com o método GET
            "motor"=>$this->getMotor(),// Pegar o valor do Motor com o método GET
            "ano"=>$this->getAno() //Pegar o valor do Ano com método GET

        );
    }
}

    $gol = new Carro(); 
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");
    
   var_dump($gol->exibir()); 

   

    

?>