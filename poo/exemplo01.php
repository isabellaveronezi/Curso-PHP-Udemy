<?php

class Pessoa{

    public $nome; //Atributo

    public function falar(){ //Método

        return "O meu nome é " .$this->nome; //this é a representação da classe ou seja objeto 
    }


}  

$isabella = new Pessoa(); 
$isabella ->nome = "Isabella Veronezi";
echo $isabella->falar();

?> 