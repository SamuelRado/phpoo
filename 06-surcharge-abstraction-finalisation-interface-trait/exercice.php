<?php

/**
 * 1. Faire en sorte de ne pas avoir d'objet Vehicule // abstract
 * 2. Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un Vehicule de base // extends + final
 * 3. Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de l'essence (ex return 'diesel') // abstract + redéfinition
 * 4. La Renault doit effectuer 30 tests de + qu'un Vehicule de base // surcharge
 * 5. La Peugeot doit effectuer 70 tests de + qu'un Vehicule de base // surcharge
 * 6. Effectuer les affichages
 */

abstract class Vehicule
{
    final public function demarrer()
    {
        return "je demarre";
    }

    abstract public function carburant();


    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
    public function carburant()
    {
        return 'essence';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 70;
    }
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return 'diesel';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 30;
    }
}


$peugeot = new Peugeot;

echo $peugeot->demarrer() . "<hr>";
echo $peugeot->carburant() . "<hr>";
echo $peugeot->nombreDeTestObligatoire() . "<hr>";

$renault = new Renault;

echo $renault->demarrer() . "<hr>";
echo $renault->carburant() . "<hr>";
echo $renault->nombreDeTestObligatoire() . "<hr>";