<?php 

$serveur = [
  "source" =>  "c:\\" ,
  "langage" => "HTML" ,
  "protocole" => "http" ,
  "host" => "localhost" ,
  "fichier" => "index.php"
];

$adresse = "{$serveur["protocole"]}://{$serveur["host"]}" ;

// XAMPP lance un serveur qui écoute l'adresse http://localhost

echo "<p>XAMPP lance un serveur qui écoute l'adresse {$adresse}</p>" ;

// le fichier en cours d'exécution est http://localhost/index.php et il est en HTML

echo "<p>le fichier en cours d'exécution est {$adresse}/{$serveur["fichier"]} et il est en {$serveur["langage"]}</p>" ;

// http://localhost/php-initiation/jour2/12-exo.php