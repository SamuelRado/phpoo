<?php

// il faut inclure le fichier où se trouve le namespace que l'on veut utiliser
require_once("namespace_commerce.php");

use Commerce1\Commande;
use Commerce2\Commande as AutreCommande;
// use Commerce2;   // déclenche un warning
// use permet d'importer un namespace


$objet1 = new Commande;
// il faut indiquer le nom du namespace suivi d'un backslash

// $objet2 = new Commerce2\Commande;
$objet2 = new AutreCommande;

echo $objet1->nbCommande . "<hr>";
echo $objet2->nbProduit . "<hr>";


/**
 * pour utiliser un élément contenu dans un namespace :
 *  - soit on importe l'élément entier (use Commerce1\Commande;)
 *  - soit on explicite le nom du namespace lors de l'instanciation (new Commerce2\Commande)
 * 
 *  on peut utiliser un alias ('as') pour éviter les conflits dans les noms de classe
 */