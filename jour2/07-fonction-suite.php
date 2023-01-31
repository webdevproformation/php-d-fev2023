<?php 
// http://localhost/php-initiation/jour2/07-fonction-suite.php

function calcul(){
    $a = 2 ;
    $b = 3 ;
    echo "<p>" . $a + $b ."</p>" ;
}
calcul();
// attention en PHP il n'est pas possible de créer deux fois la fonction dans un fichier / projet
// Fatal error: Cannot redeclare calcul() 
function calcul2(){ 
    $a = 10 ;
    $b = 5 ;
    echo "<p>" . $a + $b ."</p>" ;
}
calcul2() ;
// pour pouvoir rendre les valeurs à calculer dynanimque => ajouter des paramètres à la fonction 
function calcul3($a, $b){
    echo "<p>" . $a + $b ."</p>" ;
}
// définir la valeur de $a et $b au moment de l'appel de la fonction
calcul3(12, 15) ; // $a = 12 et $b = 15
calcul3(33, -20) ; // $a = 33 et $b = -20

// type hinting, à partir de la version 7 PHP il est possible de donner les types de paramètres

function calcul4(int $a, int $b){ // type hinting
    echo "<p>" . $a + $b ."</p>" ;
}

calcul4(12, 15) ;
// calcul4("text", 15) ; // Fatal error: Uncaught TypeError: calcul4(): Argument #1 ($a) must be of type int, string given,

// créer le fichier 08-exo.php 
// créer une fonction note 
// prendre 5 paramètres $a ,$b $c $d et $e
// les 5 paramètres doivent être de type chiffre entier
// la fonction permet de trouver la moyenne de 5 notes saisies

// exécuter la fonction avec les valeurs suivantes 
// 0 10 20 5 15
// 12 14 15 6 8