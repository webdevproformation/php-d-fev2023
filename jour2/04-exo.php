<?php 
// http://localhost/php-initiation/jour2/04-exo.php

$ville = "Marseille";

//comparer la valeur stockée dans la variable $ville avec d'autres villes 
echo "solution 1 avec des ||<br>";
if($ville == "Paris"){
    echo "vous habitez à Paris";
}elseif($ville == "Boulogne" || $ville == "Clamart" || $ville == "Montrouge"){
// }elseif($ville == ["Boulogne", "Clamart","Montrouge"]){ faux
    echo "vous habitez dans le 92";
}elseif($ville == "Saint-Denis" || $ville == "Aubervilliers" || $ville == "Pantin"){
    echo "vous habitez dans le 93";
}else{
    echo "vous habitez hors d'Ile de France";
}
echo "<br>solution 2 avec la fonction in_array()<br>";
if($ville == "Paris"){
    echo "vous habitez à Paris";
}elseif(in_array($ville,["Boulogne" , "Clamart" , "Montrouge"])){
    echo "vous habitez dans le 92";
}elseif(in_array($ville,["Saint-Denis" ,"Aubervilliers" ,"Pantin"])){
    echo "vous habitez dans le 93";
}else{
    echo "vous habitez hors d'Ile de France";
}