<?php 
// http://localhost/php-initiation/jour7/09-exo.php

$connexion = new PDO("sqlite:./06-bdd.db");

$connexion->query("
    UPDATE auteur SET prenom = 'titi' WHERE id = 1 ;
"); 

$connexion->query("
    UPDATE auteur SET prenom = 'tata' WHERE id = 4 ;
"); 

echo "mise à jour effectuée" ;

/* $connexion->query("
    DELETE FROM auteur WHERE id >= 5 
");

echo "suppression effectuée" ; */

// www => Apache => php => fichier => traiter => si ok "suppression effectuée" / si ko