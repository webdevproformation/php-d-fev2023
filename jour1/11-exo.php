<?php 
var_dump(2 >= 2); // true
// http://localhost/php-initiation/jour1/11-exo.php

var_dump("a" == "ab"); //false 

var_dump(2 != 3 && 10 < 33);
        // true && true
        // true

var_dump("hello" > "bonjour" );
        // true 
var_dump(2 ==  "2"); // true

var_dump(2 === "2"); // false

var_dump((2 != 5 && 3 > 4 ) || 2 <= 14 );
        // (true && false) || true
        // false || true
        // true
var_dump(2 != 5 && ( 3 > 4  || 2 <= 14 ) );
        // true && (false || true)
        // true && true
        // true
var_dump(2 != 5 && 3 > 4  || 2 <= 14 );
        // true && false || true
        // false || true
        // true

