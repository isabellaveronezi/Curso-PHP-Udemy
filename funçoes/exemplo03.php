<?php

function hello($text = "wolrd", $period = "good morning"){ 

    return "Hello $text! $period!<br>";
}

//echo hello()();
echo hello ("","Good Nigth!"); 
echo hello("Isabella","Good afternoon");
echo hello("Adison","");

?>