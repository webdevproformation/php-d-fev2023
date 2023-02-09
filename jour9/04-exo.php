<?php 
// http://localhost/php-initiation/jour9/04-exo.php
/* class Form {
    public int $nbCote ;
    public string $couleur ;

    public function surface(){}  
} */

abstract class Form {
    public int $nbCote ;
    public string $couleur ;
    public function __construct(){}
    abstract public function surface();
}

// etant donné que dans la class Form créer une méthode abstraite 
// TOUTES les class qui héritent de la class Form doivent OBLIGATOIREMENT contenir la méthode abstraite 
class Rectangle extends Form{ 
    public int $nbCote = 4 ;
    public string $couleur = "blue" ;
    public function surface(){ 
        return $this->nbCote ;
    }  
}

$r = new Rectangle ();
echo $r->surface() . "<br>";