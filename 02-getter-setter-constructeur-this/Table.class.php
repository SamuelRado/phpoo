<?php

/*
    - Créer une classe Table avec 1 prop privée $nbPieds
    - Créer setters & getters
    - Par défaut, une table à 4 pieds
    - Il est possible de préciser un nombre de pieds entre 3 & 6
    - Ne pas utiliser le setter hors de la classe

    Une instanciation par défaut
    Une instanciation avec un nombre de pieds correct
    Une instanciation avec un nombre de pieds incorrect (affichage d'une erreur)
*/

class Table 
{
    private $nbPieds;

    public function __construct($pieds = 4)
    {
        $this->setNbPieds($pieds);
    }

    public function setNbPieds($pieds)
    {
        if(is_int($pieds))
        {
            if($pieds >= 3 && $pieds <= 6)
            {
                $this->nbPieds = $pieds;
            }
            else
            {
                echo "Nombre de pieds incorrect<br />";
            }
        }
    }

    public function getNbPieds()
    {
        return $this->nbPieds;
    }
}

$table1 = new Table; // mon objet $table1 doit avoir 4 pieds
echo "table1 : " . $table1->getNbPieds() . " pieds<br />"; // doit afficher 4

$table2 = new Table(3);
echo "table2 : " . $table2->getNbPieds() . " pieds<br />"; // doit afficher 3

$table3 = new Table(10); // doit afficher une erreur