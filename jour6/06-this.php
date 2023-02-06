<?php 
// http://localhost/php-initiation/jour6/06-this.php

class Rectangle {
    public int $largeur = 20 ;
    public int $hauteur = 30 ;

    public function calculPerimetre() : int {
        // (20 + 30) * 2
        // (largeur + hauteur ) * 2 
        return ($this->largeur + $this->hauteur ) * 2 ;
        //  pseudo variable
    }
}

$rectangle = new Rectangle();
$rectangle->largeur ; 

echo $rectangle->calculPerimetre() . "<br>";
// créer le fichier 07-exo.php 
// créer une class Cercle 
// contient une propriété rayon et qui a pour valeur 30

// cette class contient 2 méthodes 
// aire  retourner le resultat de l'aire du cercle Pi x rayon x rayon
// perimetre retourner le resultat du périmètre 2 x Pi x rayon

// exécuter les deux méthodes aire et périmètre hors de la class 