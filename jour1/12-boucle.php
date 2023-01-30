<?php 

// boucle fonctionne même manière que sur javascript 

// dans les parenthèses de for 
// $i = 0 ; incrément 
// $i < 3 ; condition de sortie de boucle
// $i++    d'augmenter le + 1 la variable $i et de stocker le résultat du calcul 
//         dans lui même (opérateur unaire )

for($i = 0 ; $i < 1000 ; $i++){

}
// http://localhost/php-initiation/jour1/12-boucle.php
// spécial PHP => idéal lorsque l'on veut mixer du html et boucle en PHP 
?>

<?php  for($i = 0 ; $i < 1000 ; $i++) : ?>
    <h1><?php echo $i ?></h1>
<?php  endfor ?>

<?php 
for($i = 0 ; $i < 1000 ; $i++) {
    echo "<h1>$i</h1>" ;
}

/*
créer le fichier 13-exo.php
en utilisant la boucle for, afficher dans le navigateur les string suivants :
4 x 2 = 8
4 x 3 = 12
4 x 4 = 16
4 x 5 = 20
4 x 6 = 24
*/

?>