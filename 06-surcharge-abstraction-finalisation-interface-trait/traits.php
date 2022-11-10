<?php

trait Panier
{
    public $nbProduits = 1;

    public function affichageProduits()
    {
        return $this->nbProduits . " produits dans le panier";
    }
}

trait Membre
{
    public function affichageMembres()
    {
        return "affichage des membres";
    }

    private function test() // création d'une méthode privée dans le trait
    {
        return "hello world";
    }
}

class Site
{
    use Panier, Membre; // utilisation, importation des traits

    public function bonjour()
    {
        return $this->test();   // appel à la méthode privée test() depuis la classe : même si la méthode est privée, elle est aussi importée dans la classe Site et utilisable
        // si la méthode privée était héritée (extends), elle n'aurait pas été utilisable
    }
}

$site = new Site;
echo $site->affichageProduits() . "<hr>";
// var_dump(get_class_methods($site));
echo $site->bonjour();
// get_class_methods() renvoie les méthodes utilisables de l'objet passé en param

/**
 * les traits ont été inventés pour contourner le manque d'héritage multiple en php.
 * une classe peut importer plusieurs traits en même temps
 * 
 * un trait est un regroupement de méthodes et de propriétés pouvant être importé dans une classe
 * un trait ne peut pas être instanciable
 * un trait peut importer d'autres traits
 */