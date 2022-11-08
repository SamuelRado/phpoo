<?php

/*
Créer les classes
Créer un objet de la classe Maman
Donner 5 bonbons à l'objet de la classe Maman

Créer un objet de la classe Enfant
Initialiser l'objet de la classe Enfant à 0 bonbon

donnerBonbon() permet de donner des bonbons à l'enfant

Si Maman n'a plus de bonbon, afficher une phrase


classe Maman
prop:
nbBonbons privée

méthodes:
donnerBonBon(Enfant, int) publique
setNbBonbons(int) publique
getNbBonbons() publique


classe Enfant
prop:
nbBonbons privée

méthodes:
setNbBonbons(int) publique
getNbBonbons() publique

*/

class Maman
{
    private $nbBonbons;

    public function setNbBonbons($arg)
    {
        if(is_int($arg))
        {
            $this->nbBonbons = $arg;
        }
        else
        {
            echo "C'est pas un nombre<br />";
        }
    }

    public function getNbBonbons()
    {
        return $this->nbBonbons;
    }

    public function donnerBonbon(Enfant $enfant, int $nbBonbonsDemande)
    {
        // récupérer les bonbons de la maman 
        $bonbonsMaman = $this->getNbBonbons();

        if($bonbonsMaman >= $nbBonbonsDemande)
        {
            // maman a assez de bonbons
            $bonbonsEnfant = $enfant->getNbBonbons();
            // on ajoute le nb de bonbons à ce que l'enfant possède déjà
            $enfant->setNbBonbons($nbBonbonsDemande + $bonbonsEnfant);

            // on retire à la maman le nb de bonbons demandé
            $this->setNbBonbons($bonbonsMaman - $nbBonbonsDemande);
        }
        else
        {
            // maman n'a pas assez de bonbons, afficher une erreur
            echo "Désolé chéri, j'en ai pas assez<br />";
        }

        // essayer de donner le nombre de bonbons que l'enfant demande
        // si maman n'a pas assez de bonbons, afficher "Désolé"
    }
}

class Enfant
{
    private $nbBonbons;

    public function setNbBonbons($arg)
    {
        if(is_int($arg))
        {
            $this->nbBonbons = $arg;
        }
        else
        {
            echo "C'est pas un nombre<br />";
        }
    }

    public function getNbBonbons()
    {
        return $this->nbBonbons;
    }
}

$maman = new Maman;
// $maman : objet, instance de la classe Maman
// Maman : classe
$maman->setNbBonbons(5);
echo "Maman a " . $maman->getNbBonbons() . " bonbons<br />";

$enfant = new Enfant;
$enfant->setNbBonbons(0);
echo "Enfant a " . $enfant->getNbBonbons() . " bonbons<br />";

$maman->donnerBonbon($enfant, 3);
echo "Maman a " . $maman->getNbBonbons() . " bonbons<br />";
echo "Enfant a " . $enfant->getNbBonbons() . " bonbons<br />";

// un objet contient des données (propriétés) et des traitements (méthodes)
// une variable contient 1 donnée
// un tableau (array) peut contenir plusieurs données

