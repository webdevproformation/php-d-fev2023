<?php 
$fleurs = [
  [ "nom" =>  "rose" , "prix" => 200 , "origin" => "France" ],
  [ "nom"  => "jasmin" , "prix" => 300 , "origin" => "Tunisie" ],
  [ "nom"  => "muguet" , "prix" => 150 , "origin" => "Allemagne" ]
];
if(!empty($_GET)){
    $nom = $_GET["nom"];
    $recherche = [];
    foreach($fleurs as $f){
        if($f["nom"] === $nom){
            array_push($recherche , $f);
        }
    }
    $fleurs = $recherche ;
}
if(count($fleurs) === 1){
    echo "<h1>une fleur</h1>";
}elseif(count($fleurs) > 1){
    echo "<h1>toutes les fleurs</h1>";
}else {
    echo "<h1>aucune fleur</h1>";
}
var_dump($fleurs);
// http://localhost/php-initiation/jour4/05-exo.php

// créer un nouveau fichier 06-exo.php 
// tableau multidimensionnel $etudiants
// [nom : Alain , age 18 ]
// [nom : Benoit , age 25 ]
// [nom : Céline , age 12 ]
// [nom : Denis , age 40 ]

// si vous appelez le fichier 06-exo.php => afficher toutes les étudiants
// si vous appelez le fichier 06-exo.php?age=15 => afficher tous les étudiants dont l'age est supérieur à 15
// si vous appelez le fichier 06-exo.php?age=50 => afficher tous les étudiants dont l'age est supérieur à 50 => ici aucun
