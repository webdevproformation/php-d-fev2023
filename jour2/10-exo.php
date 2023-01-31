<?php 
declare(strict_types=1); // permet de dire à PHP de respecter de manière stricte les types ajoutés dans la signature des fonctions 
// http://localhost/php-initiation/jour2/10-exo.php

// signature de la fonction 
function aireCercle( float $rayon , string $unite ) :string{

    $phrase = "un cercle de rayon $rayon a une aire de " . 3.14 * $rayon ** 2 . " $unite <sup>2</sup>" ;
    return "<p>$phrase</p>"; // return permet de récupérer 
    // un traitement réalisé dans fonction 

}

echo aireCercle(30 , "cm");
echo aireCercle(12.4 , "km");

// function a() :int{} // permet dire clairement
// le type de return de la fonction

// echo == document.querySelector().innerHTML
// var_dump() == console.log

// boucle    @for sass
// condition @if 
// fonction  @mixin 