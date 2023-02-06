<?php 
// http://localhost/php-initiation/jour6/02-membre-class.php


$etudiant = "Alain" ; 
/* $nom = "Rose";
$prix = 20.5 ;
$enVente = true ; */

class Fleur {
    public string $nom = "Rose";
    public float $prix = 20.5 ;
    public bool $enVente = true ;
    public string $unite = "euro" ;
    // les 3 instructions précédentes = propriétés de la class 
    // 3 variables qui existe dans la cadre de la class 
    // typage est facultatif MAIS fortement conseillé => la langage PHP va relire 
    // votre code 
    // public scope => portée d'utilisation de la variable 
    // public utilisé (lire et modifier) DANS la class 
    // public utilisé (lire et modifier) HORS la class 
}

// créer un objet depuis la class Fleur dans la variable $fleur1
$fleur1 = new Fleur(); 

// j'ai acheté une Rose à 20,5 euros

// rappel en js 
// pour créer l'objet fleur 
// const fleur = { nom : "Rose" , prix : 20.5 , enVente : true   }
// fleur.nom 

echo $fleur1->nom  . "<br>";  // utiliser les symboles -> pour récupérer la valeur de la propriété nom 

echo $fleur1->prix . "<br>" ; 

// j'ai acheté une Rose à 20,5 euros

echo "j'ai acheté une " . $fleur1->nom . " à " . $fleur1->prix . " euros <br>";
echo "j'ai acheté une " . $fleur1->nom . " à " . number_format( $fleur1->prix , 1 , ",") . " " . $fleur1->unite.  "s <br>";


