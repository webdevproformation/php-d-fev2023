<?php 
// http://localhost/php-initiation/jour4/07-exo.php
$produits = [
 [ "nom" => "Playstation" , "prix" => 300.5 ],
 [ "nom" => "Nintendo DS" , "prix" => 200 ],
 [ "nom" => "Xbox" , "prix" => 320 ]
];

if(!empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];
    $produitsFiltre = [];
    foreach($produits as $p){
        if($min <= $p["prix"] && $max >= $p["prix"]){
            array_push($produitsFiltre, $p);
        }
    }
    $produits = $produitsFiltre ;
}
var_dump($produits);