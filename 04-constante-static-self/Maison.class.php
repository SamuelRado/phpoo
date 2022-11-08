<?php

class Maison
{
    public $couleur = 'blanc';  // appartient à l'objet
    public static $espaceTerrain = "500m²"; // appartient à la classe
    private $nbPorte = 10;  // appartient à l'objet
    private static $nbPieces = 7;   // appartient à la classe
    const HAUTEUR = '10m';  // appartient à la classe

    public static function getNbPieces()
    {
        return self::$nbPieces;
        // self:: représente la classe depuis la classe
    }

    public function getNbPortes()
    {
        return $this->nbPorte;
        // $this représente l'objet depuis la classe
    }
}

echo "espace terrain : " . Maison::$espaceTerrain . "<hr>"; // j'appelle un attribut de ma classe via ma classe

$maison = new Maison;
echo "couleur : " . $maison->couleur . "<hr>";  // j'appelle un attribut de mon objet via mon objet

// $maison2 = new Maison;
// $maison2->couleur = "rouge";
// echo "espace terrain : " . Maison::$espaceTerrain . "<hr>"; // j'appelle un attribut de ma classe via ma classe
// echo "couleur : " . $maison->couleur . "<hr>";  // j'appelle un attribut de mon objet via mon objet

Maison::$espaceTerrain = "200M²";

$maison3 = new Maison;
echo "espace terrain : " . Maison::$espaceTerrain . "<hr>"; // j'appelle un attribut de ma classe via ma classe
echo "couleur : " . $maison3->couleur . "<hr>";  // j'appelle un attribut de mon objet via mon objet
echo "nombre de portes : " . $maison3->getNbPortes() . "<hr>";  // j'appelle un attr privé de mon objet via une méthode publique de mon objet
echo "nombre de pieces : " . Maison::getNbPieces() . "<hr>";    // j'appelle une méthode de ma classe via ma classe
echo "hauteur : " . Maison::HAUTEUR . '<hr>';   // j'appelle un attr de ma classe via ma classe

/*
    OPERATEURS :
        $objet->element d'un objet à l'extérieur de la classe
        $this->element d'un objet à l'intérieur de la classe
        class::element d'une classe à l'extérieur de la classe
        self::element d'une classe à l'intérieur de la classe
*/