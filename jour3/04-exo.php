<?php 
// http://localhost/php-initiation/jour3/04-exo.php
$villes = [
    [
        "nom" => "Paris",
        "nbHabitant" => 5_000_000 ,
        "arrondissements" => 20 ,
        "monuments" => [ "sacré coeur" , "tour eiffel" ]
    ],
    [
        "nom" => "Marseille" ,
        "nbHabitant" => 3_000_000,
        "arrondissements" => 15 ,
        "monuments" => ["vieux port" , "vélodrome"]
    ]
];
/*
    lorsque je vais à Paris je vais visiter deux monuments : sacré coeur et  tour eiffel
    lorsque je vais à Marseille je vais visiter deux monuments : vieux port et vélodrome 
*/
for($i = 0 ; $i < count($villes) ; $i++){
    echo "<p>lorsque je vais à {$villes[$i]["nom"]} je vais visiter deux monuments : {$villes[$i]["monuments"][0]} et {$villes[$i]["monuments"][1]} </p>";
}
foreach($villes as $v){
    echo "<p>lorsque je vais à {$v["nom"]} je vais visiter deux monuments : {$v["monuments"][0]} et {$v["monuments"][1]} </p>";
}
