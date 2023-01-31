<?php 
// http://localhost/php-initiation/jour2/11-tableau.php

// en PHP il existe 2 manières de créer des tableaux 

$arbres = [ "chêne", "sapin" , "pommier" ];
//            0        1           2

// tableau indexé 
// chaque valeur du tableau va être utilisable via sa position (son index)
// dans le tableau

// j'ai acheté un sapin de noël
$phrase = "<p>j'ai acheté un {$arbres[1]} de noël</p>" ;

echo $phrase;

$livre = [ // tableau associatif qui contient 5 valeurs 
    "nom" => "Découvrir le langage SASS",
    "auteur" => "Alain",
    "prix" => 10.5,
    "datePublication" => "01/01/2023",
    "avis" => "8/10" 
];

echo "<p>le site s'appelle : {$livre["nom"]}</p>";
// remarque intéressant de mettre des { } autour de la variable 

// créer l