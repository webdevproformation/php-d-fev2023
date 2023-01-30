<?php 

$prenom = "Victor" ;
$nom = "Hugo" ;
$ville = "Paris" ;

// // Victor Hugo a vécu à Paris en 1800.
$phrase1 = "$prenom $nom a vécu à $ville en 1800.<br>" ;

// Victor a quitté Paris à la fin de sa carrière
$phrase2 = "$prenom a quitté $ville à la fin de sa carrière<br>";

// Victor Hugo a écrit "Notre Dame de Paris"
$phrase3 = "$prenom $nom a écrit \"Notre Dame de $ville\" <br>" ;

echo $phrase1;
echo $phrase2;
echo $phrase3;
// http://localhost/php-initiation/jour1/08-exo.php

echo "$phrase1 $phrase2 $phrase3" ;