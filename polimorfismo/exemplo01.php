<?php

abstract class Animal{ 

    public function falar(){ 

        return "som"; 
    }

    public function mover(){ 

        return "Anda"; 
    }
}

class Cachorro extends Animal{ 

    public function falar(){ 

        return "Late"; 

    }
}

class Gato extends Animal{

    public function falar(){ 

        return "Miau"; 
    }

    
}

class Passaro extends Animal{ 

    public function falar(){ 

        return "Pia"; 
    }

    public function mover(){ 

        return "Voa e " . parent::mover(); /* Com isso chama o método mover da classe Animal da 
                                                classe Pai*/ 
    }
}


    

$igor= new Cachorro(); 
echo $igor-> falar()  . "<br/>";
echo $igor->mover() .  "<br/>";

echo "--------------------------<br/>"; 

$panqueca = new Gato(); 
echo $panqueca->falar() . "<br/>"; 
echo $panqueca->mover() . "<br/>";  

echo "---------------------------<br/>"; 

$topetinho = new Passaro(); 
echo $topetinho->falar() . "<br/>"; 
echo $topetinho->mover(); 


?> 