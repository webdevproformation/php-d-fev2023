<?php 

// http://localhost/php-initiation/jour2/02-condition.php

// les structures conditionnelles sont très proches que javascript en PHP 
// quasi identique

$largeur = 30 ;

if($largeur < 10){
    var_dump("modèle XS");
} elseif($largeur < 40){ // la différence : il n'y a pas d'espace entre else et if en PHP
    var_dump("Modèle large L") ; // cette ligne est exécutée et les suivantes sont ignorées
} elseif($largeur < 80){
    var_dump("Modèle XXL") ;
} else {
    var_dump("la valeur est invalide");
}

// exo créer le fichier 03-exo.php 

/*
// créer un nouveau fichier php contenant une variable $age
// initialiser la variable $age = 30
// si l'age est compris entre 0 et 10
// alors afficher dans le navigateur vous êtes un enfant
// si l'age est compris entre 10 inclus et 18
// alors afficher dans le navigateur vous êtes un ado
// si l'age est supérieur ou égal à 18 et inférieur ou égal à 120
//  alors afficher dans le navigateur vous êtes un adulte
// sinon
// afficher dans le navigateur l'âge mentionné n'est pas conforme

// rdv 12h00 pour la correction
*/