<?php 

//http://localhost/php-initiation/jour14/index.php

// fonction native de PHP => livré avec langage comme + - true false function for if else
// isset();

// php.net 
// https://www.php.net/manual/fr/function.isset.php

// isset — Détermine si une variable est déclarée (créer) et est différente de null

var_dump(isset($a)); // $a n'a pas été créée AVANT isset() false 

$b = 30 ;
var_dump(isset($b)); // $b existe donc la fonction isset() true 

// => est ce que une variable est créée ou pas ???


// dans le fichier vue/privee/gestion-user-form.php
?>

<!-- index.php require("vue/privee/gestion-user-form.php") x 2

-->

<?php if(isset($user)) :?> <!-- si la variable $user existe (créée AVANT) -->
    <h1 class="mb-4">Mettre à jour un profil user</h1>
<?php else : ?>
    <h1 class="mb-4">Ajouter un nouveau profil user</h1>
<?php endif ?>
