<?php 
// http://localhost/php-initiation/jour7/07-exo.php
$connexion = new PDO("sqlite:./06-bdd.db");
// effectuer une requête SQL 
// EXACTEMENT les requêtes SQL vues en cours ensemble 
// projet 
// html
// css (bootstrap / sass)
// js  (jquery)
// php (procédural / POO)
// SQL (SQLite / MySQL)
$connexion->query("
CREATE TABLE IF NOT EXISTS auteur (
    id INTEGER PRIMARY KEY AUTOINCREMENT , 
    prenom VARCHAR(200) , 
    nom VARCHAR(200) ,
    status BOOLEAN , 
    dt_creation DATE
)
");