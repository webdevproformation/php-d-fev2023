<?php 

// tableau qui contiennent des objets en js collection
// tableau indexé qui contiennent des tableaux associatifs 
// tableau multi dimensions

$etudiants = [
    [
        "nom" => "Alain",
        "age" => 22 ,
        "competences" => ["js", "css"]
    ],
    [
        "nom" => "Céline",
        "age" => 12 ,
        "competences" => ["php" , "sql"]
    ]
];

// Alain maîtrise le css 
// $etudiants[0]["nom"]
// $etudiants[0]["competences"][1]
echo "<p>{$etudiants[0]["nom"]} maîtrise le {$etudiants[0]["competences"][1]}</p>" ;
echo "<p>" . $etudiants[0]["nom"] . " maîtrise le " . $etudiants[0]["competences"][1] . "</p>" ;

// http://localhost/php-initiation/jour3/03-tableau-suite.php

// écrire dans le navigateur le texte suivant :
// Céline qui a 12 ans maîtrise le php 

echo "<p>{$etudiants[1]["nom"]} qui a {$etudiants[1]["age"]} maîtrise le {$etudiants[1]["competences"][0]}</p>";

echo "<p>" . $etudiants[1]["nom"] . " qui a " . $etudiants[1]["age"] . " maîtrise le " . $etudiants[1]["competences"][0] . "</p>";