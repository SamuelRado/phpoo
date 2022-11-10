<?php

/**
 * Un namespace (espace de nom) permet d'organiser mes classes
 */

 namespace Commerce1;

 class Commande
 {
    public $nbCommande = 1;
 }


 echo __NAMESPACE__;
//  __NAMESPACE__ est une constante magique qui renvoie le nom du namespace dans lequel on se trouve

 namespace Commerce2;

 class Commande
 {
    public $nbProduit = 2;
 }