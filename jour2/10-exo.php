<?php 
declare(strict_types=1);
// http://localhost/php-initiation/jour2/10-exo.php

// signature de la fonction 
function aireCercle( float $rayon , string $unite ) :string{

    $phrase = "un cercle de rayon $rayon a une aire de " . 3.14 * $rayon ** 2 . " $unite <sup>2</sup>" ;
    return "<p>$phrase</p>";

}

echo aireCercle(30 , "cm");
echo aireCercle(12.4 , "km");