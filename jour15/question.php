<?php 

/* $etudiants = [
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 32],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 28],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],
    ["id" => 1 , "nom" => "Alain" , "age" => 30],

]; */

$connexion = new PDO("mysql:host=localhost;dbname=exo;charset=utf8mb4" , "root", "");

$sth = $connexion->prepare("SELECT * FROM etudiants");
$sth->execute();
$etudiants = $sth->fetchAll(); // all 
var_dump($etudiants);
// http://localhost/php-initiation/jour15/question.php


$sth = $connexion->prepare("SELECT * FROM etudiants WHERE nom = :nom");
$sth->execute(["nom" => "Céline"]);
$etudiant = $sth->fetch(); // juste 1 etudiant
var_dump($etudiant);


$sth = $connexion->prepare("UPDATE etudiants SET age = 30 WHERE nom = :nom");
$sth->execute(["nom" => "Céline"]);

$sth = $connexion->prepare("DELETE FROM etudiants WHERE age <= :age");
$sth->execute(["age" => 25]);