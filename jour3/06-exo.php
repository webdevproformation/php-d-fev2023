<?php 

$formation = [
    [ 
        "nom" => "js" , 
        "prix" => 2300.20 , 
        "sujets" => ["install", "navigateur", "formulaire"]  
    ],
    [ 
        "nom" => "php" , 
        "prix" => 750.55 , 
        "sujets" => ["xampp", "apache"]  
    ]
];
// http://localhost/php-initiation/jour3/06-exo.php
// la formation js coûte 2 300,2 euros et contient 3 sujets
// la formation php coûte 750,5 euros et contient 2 sujets

for($i = 0 ; $i < count($formation) ; $i++){
    $prixFr = number_format($formation[$i]["prix"] , 1 , "," , " ") ;
    $nbSujet = count($formation[$i]["sujets"]);
    echo "<p>la formation {$formation[$i]["nom"]} coûte {$prixFr} euros et contient {$nbSujet} sujets</p>";
}

foreach($formation as $f){
    $prixFr = number_format($f["prix"] , 1 , "," , " ") ;
    $nbSujet = count($f["sujets"]);
    echo "<p>la formation {$f["nom"]} coûte {$prixFr} euros et contient {$nbSujet} sujets</p>";
}

foreach($formation as $f){
    echo "<p>la formation {$f["nom"]} coûte " . number_format($f["prix"] , 1 , "," , " ") . "  euros et contient ". count($f["sujets"]) ." sujets</p>";
}