<?php

class Pessoa{

    public $nome = "Adison Rocha"; // atributo publico
    protected $idade = "18"; // atributo protegido
    private $senha = "123456"; // atributo privado

    public function verDados(){ //método

        echo $this->nome . "<br/>"; 
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>"; 
    }

}

$objeto = new Pessoa(); 

//echo $objeto->nome . "<br/>";

$objeto->verDados(); 

?>