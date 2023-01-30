<?php 
// 07-traitement-string.php

// concaténation = addition plusieurs textes 

$prenom = "Alain" ;
$nom = "DOE" ;

// Alain DOE découvre le PHP 
$phrase = "$prenom $nom découvre le PHP" ; // concaténation " " dans les guillemets
                                           // j'ai écris les variables 
// 1ère manière
echo $phrase ; // écrire dans la page html 

// http://localhost/php-initiation/jour1/07-traitement-string.php

// 2ème manière
$phrase2 = "{$prenom} {$nom} découvre le PHP" ;// concaténation " " dans les guillemets
                                               // $variable entouré de { }
echo $phrase2 ; 

// 3ème manière utilisation de l'opération . 
$phrase3 = $prenom . " " . $nom . " découvre le PHP <br>" ;
echo $phrase3 ;

// écrire avec php la phrase suivant
// Victor Hugo a dit "Vive les Misérables"
// caractère d'échappement 

$parole = "Victor Hugo a dit \"Vive les Misérables\" <br>" ;
// utilisation du symbole anti slash devant les guillemets à interpréter comme des guillemet et non comme la fin d'une string 
echo $parole ; 

// si vous voulez que le texte saut une ligne au prochain echo il faut ajouter la balise html <br> à la fin de la concaténation 
// par défaut il n'y a pas de saut ligne avec echo 

// autre manière de faire des sauts de ligne 

$unTexte = "<div>bonjour , comment allez vous $prenom ?</div>"; 

echo $unTexte; 

$phraseMultiLigne = "hello les amis <br><br>

    comment allez vous ? <br><br>
    
    j'espère bien !";
// avec les guillemets double => possible de sauter des lignes dans la valeur de la variable 

echo $phraseMultiLigne  ;

// exo créer le fichier 08-exo.php 
// dans ce fichier créer 3 variables
// prenom Victor
// nom Hugo
// ville Paris

// les 3 phrases suivantes :
// Victor Hugo a vécu à Paris en 1800.
// Victor a quitté Paris à la fin de sa carrière
// Victor Hugo a écrit "Notre Dame de Paris"

// afficher ces 3 phrases dans la navigateur 
