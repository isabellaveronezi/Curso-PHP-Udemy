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

class Programador extends Pessoa{      /* A diferença de quando voce herda uma classe
                                        você não consegue exibir valores privados no caso 
                                        do método verDados. */

    public function verDados(){ //método

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>"; 
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>"; 
    }


}

$objeto = new Programador(); 

//echo $objeto->nome . "<br/>";

$objeto->verDados(); 

?>