<?php

/*
    Créer la classe Véhicule
    Vérif possible : si l'arg de setLitresEssence() est un int

    Créer un objet $vehicule1
    Attribuer à cet objet 5 litres d'essence
    Afficher le nombre de litres d'essence de $vehicule1
*/


class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($arg)
    {
        if(is_int($arg))
        {
            $this->litresEssence = $arg;
        }
    }

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }
}

/*
    Créer la classe Pompe
    Vérif possible : si l'arg de setLitresEssence() est un int

    Créer un objet $pompe
    Attribuer un nb de litres d'essence à la pompe : 800
    Afficher le nb de litres d'essence de la pompe
*/


class Pompe
{
    private $litresEssence;

    public function setLitresEssence($arg)
    {
        if(is_int($arg))
        {
            $this->litresEssence = $arg;
        }
    }

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }

    public function donnerEssence(Vehicule $vehicule)  // donnerEssence() a besoin d'un objet Vehicule
    {
        // donnerEssence() remplit le réservoir du vehicule passé en paramètre
        // le réservoir d'un véhicule contient 50L max
        // après avoir utilisé donnerEssence(), afficher le nb de litres d'essence du véhicule et de la pompe

        $essencePompe = $this->getlitresEssence();
        $essenceVehicule = $vehicule->getlitresEssence();
        $besoinEssence = 50 - $essenceVehicule;

        $vehicule->setLitresEssence($besoinEssence + $essenceVehicule);
        $this->setLitresEssence($essencePompe - $besoinEssence);
    }
}

$vehicule1 = new Vehicule;
$nb = 5;
$vehicule1->setLitresEssence($nb);
echo "vehicule1 : " . $vehicule1->getlitresEssence() . " litres<br />";

$pompe = new Pompe;
$pompe->setLitresEssence(800);
echo "pompe : " . $pompe->getlitresEssence() . " litres<br />";

$pompe->donnerEssence($vehicule1);

echo "vehicule1 : " . $vehicule1->getlitresEssence() . " litres<br />";
echo "pompe : " . $pompe->getlitresEssence() . " litres<br />";



/************************
UML:
---------------------
|    classe : 		|
|	 Vehicule		|
---------------------
|	propriété(s) :	|
|$litresEssence(int)|
---------------------
|	méthode(s):		|
|setlitresEssence() |
|getlitresEssence()	|
---------------------

---------------------
|    classe :		|
|	 Pompe   		|
---------------------
|	propriété(s) :	|
|$litresEssence(int)|
---------------------
|	méthode(s) :	|
|setlitresEssence() |
|getlitresEssence()	|
|donnerEssence()	|
---------------------
***********************/