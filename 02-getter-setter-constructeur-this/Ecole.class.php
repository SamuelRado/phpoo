<?php

/*
    - Créer la classe Ecole
    - 2 prop privées : $nbProfs & $nbEleves
    - Par défaut, une ecole contient 3 profs et 60 élèves.
    - Il doit y avoir au moins 1 prof & 15 élèves

    Une instanciation par défaut
    Une instanciation avec 2 valeurs correctes
    Une instanciation avec 1 ou 2 valeurs incorrectes
*/

class Ecole
{
    private $nbProfs;
    private $nbEleves;

    public function __construct($eleves = 60, $profs = 3)
    {
        $this->setNbEleves($eleves);
        $this->setNbProfs($profs);
    }

    public function setNbProfs($arg)
    {
        if($arg >= 1)
        {
            $this->nbProfs = $arg;
        }
        else
        {
            echo "Nb de profs incorrect<br />";
        }
    }

    public function getNbProfs()
    {
        return $this->nbProfs;
    }

    public function setNbEleves($arg)
    {
        if($arg >= 15)
        {
            $this->nbEleves = $arg;
        }
        else
        {
            echo "Nb d'élèves incorrect<br />";
        }
    }

    public function getNbEleves()
    {
        return $this->nbEleves;
    }
}

$ecole1 = new Ecole;
echo "ecole1 : " . $ecole1->getNbEleves() . " eleves & " . $ecole1->getNbProfs() . " profs<br />";

$ecole2 = new Ecole(20, 1);
echo "ecole2 : " . $ecole2->getNbEleves() . " eleves & " . $ecole2->getNbProfs() . " profs<br />";

$ecole3 = new Ecole(0, 0);  // affiche une erreur