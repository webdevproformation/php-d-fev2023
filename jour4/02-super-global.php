<?php 

// 02-super-global.php

// 9 variables créées automatiquement par PHP 

// $_Get  // $_get => n'existe pas 

// $_GET       x
// $_POST      x
// $_FILE
// $_COOKIE
// $_SERVER    x
// $_SESSION   x
// $_REQUEST
// $_ENV
// $GLOBALS

// est utilisation N'IMPORTE OU dans votre code 
// les super globales ont un scope (portée) super globales 
// echo $_GET ; // permet de récupérer des informations dans l'url 

/* function a (){
    $b = $_GET ;
} */

var_dump($_GET); // []
// http://localhost/php-initiation/jour4/02-super-global.php

var_dump($_GET); // [ "nom" => "Alain" ]
// http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain

var_dump($_GET); // [ "nom" => "Alain" , "age" => "20" , "isAdmin" => "false" ]
// http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain&age=20&isAdmin=falses
?>

<ul>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php">lien1</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain">lien2</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain&age=20&isAdmin=false">lien3</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?page=1">lien4</a></li>
</ul>

<!--
    lire / regarder 
    cliquer 
    remplir des formulaires 
-->