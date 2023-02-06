<?php 
// http://localhost/php-initiation/jour6/07-exo.php
class Cercle {
    public int $rayon = 30 ;

    public function aire() :float {
        return 3.14 * $this->rayon ** 2 ;

    }
    public function perimetre() :float{
        return 2 * 3.14 *  $this->rayon ; 
    }
}

$c = new Cercle();
echo $c->aire() . "<br>";
echo $c->perimetre() . "<br>";

// créer le fichier 08-exo.php 
// créer une class Formation 
// plusieurs propriétés 
// nom  "devOps"
// duree 5
// prix  5000
// matieres => linux php html css 

// cette class dispose de 3 méthodes 
// devis 
// retourner le texte suivant "la formation devOps coûte 5 000 euros"

// programme 
// retourner le texte suivant "il y a 4 sujets abordés durant les 5 semaines"

// sommaire : 
// retourne le texte suivant : vous allez étudier linux, php, html et css 
