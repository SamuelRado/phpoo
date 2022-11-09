<?php

class A
{
    public function calcul()
    {
        // imaginer un algo de 500 lignes
        return 10;  // résultat de l'algo
    }
}

class B extends A 
{
    public function calcul()    // redéfinition
    {
        // $this->calcul() : erreur : la méthode calcul() sera exécutée en boucle
        $nb = parent::calcul(); // surcharge : j'exécute la méthode calcul() de la classe Mère

        if($nb <= 100)
        {
            return "$nb est inférieur ou égal à 100";
        }
        else
        {
            return "$nb est supérieur à 100";
        }
    }
}

class C extends B 
{
    public function calcul()
    {
       echo parent::calcul();
       return "je suis dans C";
    }
}

// $b = new B;
// echo $b->calcul() . "<br>";
$c = new C;
echo $c->calcul() . "<br>";

/**
 * Surcharge (override) : prendre en compte le comportement d'origine d'une méthode et y ajouter un traitement complémentaire
 * Redéfinition simple de méthode : écraser le comportement d'origine
 */