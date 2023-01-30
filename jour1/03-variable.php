<?php 

// en js pour créer une variable on doit utiliser le mot clé let ou const ou var 
// const a = 10 ;

// en PHP pas de mot clé 
// met le symbole $devantLeNomDeLaVariable 
$a = 10 ; 

// en js le ; final est facultatif
// en PHP le ; en fin d'instruction est OBLIGATOIRE 
// un seul ; manquant dans la page => STOP erreur fatale 

$b=30; // les espaces avant et après le symbole d'affectation = sont facultatifs 

// comme en javascript vous allez avoir 5 types de valeurs que l'on stocker dans une variable

// string => texte 

$c = "bonjour les amis" ; 
$d = 'comment allez vous ???' ; 

// chiffres chiffre entier / chiffre à virgule int / float 

$e = 200 ; // integer
$f = -500 ; 

$g = 1.2 ;  // float 
$h = -42.51 ; 

// boolean 

$i = true ;
$j = false ; 

// 3 types de base varible contient 1 valeur

// 1 variable stocker plusieurs valeurs => type complexe 
// tableau 
// objet 

$k = ["pomme" , "poire" , "banane"] ; // tableau simple / tableau indexé (même chose que js)

// tableaux associatifs qui n'existent pas en js 
// contient 3 valeurs 
$l = [ "nom" => "Alain" , "age" => 20 , "isAdmin" => true ] ;

// il est conseillé de faire mettre des sauts de lignes pour chaque valeur d'un tableau associatif (pour le rendre plus lisible )

$l = [ 
    "nom" => "Alain" , 
    "age" => 20 , 
    "isAdmin" => true 
] ;

// dernier type complexe objet MAIS pour créer un objet en PHP il faut au préalable commencer par une class 

// $m = { a : } ça ne fonctionne pas ... 

class M{} // d'abord créer une class 
$m = new M() ; // l'objet $m est OBLIGATOIRE issue de M 
// class et objet en PHP font l'objet d'une semaine spéciale tant le sujet contient une grande d'information 


// support 
// https://formation.webdevpro.net/php-initiation/
// login : php 
// password : initiation 

// version 6 de javascript 
// php 8 

// en PHP vous avez un fichier php.ini => fichier qui permet de modifier comment PHP fonctionne 
// il est possible via le fichier php.ini d'ajouter des fonctionnalités en + au langage PHP 

// module xdebug => console.log pour javascript 
// par défaut ce module n'est pas installé dans XAMPP 
// il est très intéressant de l'installer dans votre XAMPP 

// https://webdevpro.net/xampp-visual-studio-et-le-module-php-xdebug/