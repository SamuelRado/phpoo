<?php

class Vehicule
{
    private static $marque = "BMW";
    private $couleur = "noir";

    public function getMarque()
    {
        return self::$marque;
    }

    public function setMarque($arg)
    {
        self::$marque = $arg;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($arg)
    {
        $this->couleur = $arg;
    }
}

//------------------------


$vehicule1 = new Vehicule;
echo "Vehicule de marque : " . $vehicule1->getMarque() . " et de couleur : " . $vehicule1->getCouleur() . "<hr>";

$vehicule2 = new Vehicule;
$vehicule2->setCouleur("rouge");
echo "Vehicule de marque : " . $vehicule2->getMarque() . " et de couleur : " . $vehicule2->getCouleur() . "<hr>";

$vehicule3 = new Vehicule;
echo "Vehicule de marque : " . $vehicule3->getMarque() . " et de couleur : " . $vehicule1->getCouleur() . "<hr>";
$vehicule3->setMarque("Renault");
echo "Vehicule de marque : " . $vehicule3->getMarque() . " et de couleur : " . $vehicule1->getCouleur() . "<hr>";

$vehicule4 = new Vehicule;
echo "Vehicule de marque : " . $vehicule4->getMarque() . " et de couleur : " . $vehicule1->getCouleur() . "<hr>";
