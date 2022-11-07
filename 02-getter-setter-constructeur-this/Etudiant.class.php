<?php

class Etudiant
{
    private $prenom;

    public function __construct($nouveauPrenom = "Jean")   // __construct() est appelée automatiquement lors du 'new'
    {
        // ici, Jean est une valeur par défaut : elle sera utilisée si rien n'est passé en arg du 'new' (new Etudiant)
        echo "Instanciation de la classe Etudiant<br />";
        $this->setPrenom($nouveauPrenom);
    }

    public function setPrenom($nouveauPrenom)
    {
        $this->prenom = $nouveauPrenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant = new Etudiant("Sam");
// $etudiant->setPrenom("Sam");
echo $etudiant->getPrenom() . "<br>";

$etudiant2 = new Etudiant;
echo $etudiant2->getPrenom() . "<br>";

// Comment faire pour initialiser un objet directement avec des données ?

// function hello($arg = "coucou")
// {
//     echo $arg;
// }

// hello();

/*
    __construct() est une méthode magique
    les méthodes magiques commencent par __
    les méthodes magiques se déclenchent automatiquement lors d'un évènement précis
    __construct() se déclenche automatiquement lors du 'new'
*/