<?php 
// http://localhost/php-initiation/jour2/03-exo.php

$age = 30 ;

if($age >= 0 && $age < 10){
    echo "vous êtes un enfant";
} elseif($age >= 10 && $age < 18){
    echo "vous êtes un ado";
} elseif($age >= 18 && $age <= 120){
    echo  "vous êtes un adulte"; // le texte affiché
} else {
    echo "l'age mentionné n'est pas conforme";
}

// texte chiffre à écrire  dans le navigateur 
// echo 
// debugger une variable => valeur / type / où dans le script xdebug
// var_dump()

// boolean 
// echo true => 1
// echo false => rien
var_dump(true); // bool(true)
var_dump(false); // bool(false) 

// && condition à gauche et à droite soient SIMULTANEMENT true
// || une condition soit à gauche soit à droite soit les deux  true