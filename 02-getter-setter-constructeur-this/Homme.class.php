<?php

class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($nouveauPrenom)
    {
        if(is_string($nouveauPrenom))
        {
            $this->prenom = $nouveauPrenom;
            // $this représente l'objet en cours depuis l'intérieur de la classe
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($nouveauNom)
    {
        if(is_string($nouveauNom))
        {
            $this->nom = $nouveauNom;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
}

$homme = new Homme;
$homme->setPrenom("Sam");   // je modifie l'élément $prenom via un setter car $prenom est private
echo $homme->getPrenom() . "<br />";    // j'accède à l'élément $prenom via un getter car $prenom est private
$homme->setNom(150);
echo $homme->getNom() . "<br />";

// $homme->prenom = 150;
// echo $homme->prenom;

/*
    DIVERS :
        - $this représente l'objet à l'intérieur de la classe
        - les getters et setters permettent de contrôler l'intégrité des données
        - mettre les propriétés en private permet d'éviter qu'elles ne soient modifiées dans le code (c'est une bonne contrainte)
*/