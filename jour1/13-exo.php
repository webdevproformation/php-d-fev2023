<?php  // http://localhost/php-initiation/jour1/13-exo.php
/*
4 x 2 = 8
4 x 3 = 12
4 x 4 = 16
4 x 5 = 20
4 x 6 = 24
*/ ?>
<h1>solution 1</h1>
<?php for($i=2 ; $i <= 6 ; $i++) : ?>
    <p><?php echo "4 x $i = " . $i * 4  ?></p>
<?php endfor ?>
<h1>solution 2</h1>
<?php 
for($i=2 ; $i <= 6 ; $i++) {
    $resultat = "4 x $i = " . $i * 4 . "<br>";
    echo $resultat  ;
}

