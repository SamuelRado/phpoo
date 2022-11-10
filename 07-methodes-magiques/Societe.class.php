<?php

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {
        echo "Lancement de construct()<hr>";
    }

    public function __set($nomDeLaProp, $valeurDeLaProp)
    {
        echo "La propriété $nomDeLaProp n'existe pas, la valeur $valeurDeLaProp n'a donc pas été affectée<hr>";
    }

    public function __get($nomDeLaProp)
    {
        echo "La propriété $nomDeLaProp n'existe pas, je ne peux donc pas l'afficher<hr>";
    }

    public function __call($nomDeLaMethode, $argsDeLaMethode)
    {
        echo "La méthode $nomDeLaMethode n'existe pas.<br>Les arguments étaient " . implode(", ", $argsDeLaMethode) . "<hr>";
        // implode() prend en param un séparateur et un tableau et renvoie une string
        // explode() prend en param un séparateur et une string et renvoie un tableau
    }
}

$objet = new Societe;
$objet->departement = "75"; // lorsque nous affectons une valeur à une prop inexistante, la prop et la valeur sont créees dans l'objet (anormal, php est trop permissif)
echo $objet->blabla;    // erreur undefined
$objet->methode(54, "re", 54, "gegui");  // fatal error



// méthode magique : s'exécute automatiquement
// __construct() : se lance à la création de l'objet (au moment du 'new')
// __set() : se lance lorsque nous essayons d'affecter une valeur à une prop inexistante
// __get() : se lance lorsque nous essayons d'afficher une prop inexistante
// __call() : se lance lorsque nous essayons d'exécuter une méthode inexistante