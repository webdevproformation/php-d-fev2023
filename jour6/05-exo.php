<?php 
// http://localhost/php-initiation/jour6/05-exo.php
class Exo {
    public int $note = 20 ;

    public function enonce () : string{
        return "veuillez réaliser l'exercice suivant ...";
    }
    public function conseil ( bool $test ) : string {
        if($test === true){
            return "voici une vidéo à regarder" ;
        } else {
            return "aucune astuce pour cet exo" ;
        }
    }
}
// hors de la class 
$e = new Exo();
echo $e->enonce() . "<br>";
echo $e->conseil(true) . "<br>";
echo $e->note . "<br>";

// $this 
// private public 
// setter et getter 

/* function calcul(int $a, string $b){
}

calcul(1,"bonjour"); */