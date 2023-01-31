<?php 
/* note (0, 10, 20, 5, 15);
function note (int $a ,int $b ,int $c ,int $d ,int $e) {
    echo "<p> ((int $a ,int $b ,int $c ,int $d ,int $e) /5)<p> ";
} */

// 1 créer les fonctions
// 2 les utiliser (exécuter)
// calcul addition / division et concatenation
// balises ouvertes doivent être fermées

function note (int $a ,int $b ,int $c ,int $d ,int $e) {
    echo "<p> ". ( $a + $b + $c + $d + $e) / 5 ."</p>";
}

note (0, 10, 20, 5, 15);
note (12, 14, 15, 6, 8);

function note2 (int $a ,int $b ,int $c ,int $d ,int $e) {
    $total = $a ;
    $total += $b;
    $total += $c;
    $total += $d;
    $total += $e;
    echo "<p> ". ( $total) / 5 ."</p>";
}

function note3 (int $a ,int $b ,int $c ,int $d ,int $e) {
    $chiffres = [$a, $b,$c,$d, $e];
    $total = array_sum($chiffres);
    echo "<p> ". ( $total) / 5 ."</p>";
}

function note4 (array $chiffres) {
    $total = array_sum($chiffres);
    echo "<p> ". ( $total) / 5 ."</p>";
}
note4([0, 10, 20, 5, 15]);

// 15h20 