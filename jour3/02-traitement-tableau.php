<?php 

// créer un tableau indexé 
// nom de la variable tableau
// remplir de texte 7 valeurs 
// lundi => dimanche 

$tableau = [
        "lundi" ,  // 0 minimum
        "mardi" , 
        "mercredi" , 
        "jeudi", 
        "vendredi" ,
        "samedi" , 
        "dimanche"  // 6 inclu maximum 
];

// traitement classique => parcourir le tableau 
// utiliser chaque valeur du tableau 
// via un boucle 

for( $i = 0 ; $i <= 6 ; $i++ ){
    echo "{$tableau[$i]}<br>";
}
// http://localhost/php-initiation/jour3/02-traitement-tableau.php

$chiffre = 10 ;

for( $i = 0 ; $i < count($tableau) ; $i++ ){ 
    echo "{$tableau[$i]}<br>";
}

// count() fonction native de php 
// mot clé du langage PHP if for function 
// count() manière d'être utilisé => 1er paramètre  de la fonction native count() doit être de TYPE un tableau OBLIGATOIREMENT

/* for( let i = 0 ; i < tableau.length ; i++ ){ 
   document.querySelector("div").innerHTML += `${tableau[i]}<br>` ;
} */

foreach($tableau as $titi){ // $tableau[$i]
    echo "{$titi}<br>";
}


/* for(let titi of tableau){ // $tableau[$i]
    echo "{$titi}<br>";
} */