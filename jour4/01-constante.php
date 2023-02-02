<?php 

// en php on crée des variables 

$premier = 1 ; 

// il est aussi possible de créer des constantes en PHP 
// il faut passer par une fonction pour créer des constantes en PHP :

define("STATUS","payé");

echo STATUS ."<br>"; // utiliser une constante ne pas mettre de $ devant 

// http://localhost/php-initiation/jour4/01-constante.php

// j'ai payé ma facture 

echo "j'ai {STATUS} ma facture <br>"; // ça ne marche pas
echo "j'ai " . STATUS ." ma facture <br>"; // utiliser les . 

// nouvelle manière de créer des constantes

const LIVRAISON = "finalisée" ; 
echo "la livraison est  " . LIVRAISON . "<br>";

// LIVRAISON = 200; 

// constantes natives
// https://www.php.net/manual/en/dir.constants.php

// DIRECTORY_SEPARATOR / ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
echo __LINE__ . "<br>";

// constantes magiques 
// constantes dont la valeur change en fonction de leur contexte d'exécution 
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __LINE__ . "<br>";

// cas pratique => pouvez vous me recupérer le nom du fichier actuellement exécuté ?? 

$path = explode(DIRECTORY_SEPARATOR , __FILE__);
var_dump($path);

echo $path[5] . "<br>";
echo $path[count($path) - 1] . "<br>";
echo end($path) . "<br>"; 