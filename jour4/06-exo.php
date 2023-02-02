<?php 
// http://localhost/php-initiation/jour4/06-exo.php
$etudiants = [
    ["nom" => "Alain" , "age" => 18 ],
    ["nom" => "Benoit" , "age" => 25 ],
    ["nom" => "Céline" , "age" => 12 ],
    ["nom" => "Denis" , "age" => 40 ],
];

if(!empty($_GET)){
    $age = $_GET["age"]; // 15
    $etudiantsFiltre = [];
    foreach($etudiants as $e){
        if($age <= $e["age"]){
            array_push($etudiantsFiltre,$e);
        }
    }
    $etudiants = $etudiantsFiltre ;
}
var_dump($etudiants);

// créer le fichier 07-exo.php 
// tableau multidimensionnel produits 
// [ "nom" : Playstation , prix 300.5 ]
// [ "nom" : Nintendo DS , prix 200 ]
// [ "nom" : Xbox , prix 320 ]

// si vous exécutez le fichier php sans aucune partie variable => afficher tous les produits 
// si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=200&max=250
// [ "nom" : Nintendo DS , prix 200 ]
// si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=0&max=310
// [ "nom" : Nintendo DS , prix 200 ] et [ "nom" : Playstation , prix 300.5 ]
