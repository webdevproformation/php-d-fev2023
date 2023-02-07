<?php 
// http://localhost/php-initiation/jour7/03-exo.php

class Exo {
    public int $note ;
    public string $enonce ;
    public array $sujets ;
    // 3 propriétés typés MAIS sans valeur 
    // utiliser la fonction constructrice la class pour les initialiser 
    // donner aux 3 propriétés une valeur
    public function __construct(int $note_s , string $enonce_p , array $sujets_p){
        $this->note = $note_s;
        $this->enonce = $enonce_p;
        $this->sujets = $sujets_p;
    }
}

$e1 = new Exo(20 , "créer une fonction" , ["créer", "exécuter"]);
$e2 = new Exo(10 , "créer une variable" , ["lister", "compteur", "afficher"]);
