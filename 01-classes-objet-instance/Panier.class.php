<?php

class Panier
{
    // une classe est une structure contenant différentes données

    // propriété ou attribut : variable qui appartient à une classe
    public $nbProduits;

    // méthode : fonction qui appartient à une classe
    public function afficherNbArticles()
    {
        // traitements
        return "Voici le nombre d'articles";
    }

    protected function ajouterArticle()
    {
        return "L'article a été ajouté";
    }

    private function retirerArticle()
    {
        return "L'article a été retiré";
    }
}

// une classe est un plan : elle indique à quoi va ressembler notre objet
$panier1 = new Panier;  // création d'un objet : instanciation d'une classe grâce au mot-clef new
var_dump($panier1);
$panier1->nbProduits = 5;   // j'accède à la prop nbProduits
echo "Panier1 : " . $panier1->nbProduits . " produits<br />";
echo "Panier1 : " . $panier1->afficherNbArticles(). "<br />";
// echo "Panier1 : " . $panier1->ajouterArticle(). "<br />"; erreur : appel à une méthode protected
// echo "Panier1 : " . $panier1->retirerArticle() . "<br />"; erreur : appel à une méthode private

$panier2 = new Panier;  // instanciation de la classe Panier avec 'new'
$panier2->nbProduits = 3;
echo "Panier2 : " . $panier2->nbProduits . " produits<br />";
echo "Panier1 : " . $panier1->nbProduits . " produits<br />";
var_dump($panier2);

/*
    NIVEAUX DE VISIBILITE :
        - public : accessible de partout (dans et hors de la classe)
        - protected : accessible uniquement dans la classe où l'élément a été déclaré et dans   
        les classes héritières
        - private : accessible uniquement dans la classe où l'élément a été déclaré

    DIVERS :
        - new est un mot-clef permettant d'instancier une classe
        - une classe peut produire plusieurs objets
        - $panier1 & $panier2 sont des objets issus de la classe Panier
*/