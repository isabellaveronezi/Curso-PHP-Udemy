<?php

interface Atleta{ 

    public function jogar($jogando); 
    public function correr($correndo); 
    public function driblar($driblando); 
    public function treinar($treinando); 

}

abstract class Time implements Atleta{ 

    public function jogar($jogando){

    echo "O time do Corinthians está " . $jogando . "muito"; 
    
    echo "<br/>"; 

    }

    public function correr ($correndo){

    echo "Os jogadores do Corinthians estão " . $correndo . "demais nesse jogo"; 

    echo "<br/>"; 

    }
    
}

class Coritnhians extends Time{ 

}

$time = new Corinthians(); 
$time-> jogar(Adison);



?>