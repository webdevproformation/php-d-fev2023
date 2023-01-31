<?php 
// http://localhost/php-initiation/jour2/01-exo.php

/*
3 x 6 = 18
3 x 9 = 27 
3 x 12 = 36

min => 6
max => 12 inclu
incrément = + 3
*/ 
echo  "solution 1 pour question 1<br>" ;
for($i = 6 ; $i <= 12 ; $i = $i + 3){
    $resultat = "3 x $i = " . $i * 3;
    echo "<p>$resultat</p>";
}
echo "solution 2 pour question 1<br>";
for($i = 6 ; $i <= 12 ; $i += 3){
    $resultat = "3 x $i = " . $i * 3;
    echo "<p>$resultat</p>";
}
/**
5 x 9 = 45 
5 x 7 = 35
5 x 5 = 25
5 x 3 = 15
 */
/*
maximum 9
minimum inclu 3
diminution - 2
*/ 
echo "solution 1 question2" ;
for($i = 9 ; $i >= 3 ; $i = $i - 2){
    $resultat = "5 x $i = " . $i * 5;
    echo "<p>$resultat</p>";
}
echo "solution 2 question2" ;
for($i = 9 ; $i >= 3 ; $i -= 2){
    $resultat = "5 x $i = " . $i * 5;
    echo "<p>$resultat</p>";
}

