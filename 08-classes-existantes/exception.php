<?php

try 
{
    require("fichier");
}
catch(Error $e)
{
    echo "Inclusion impossible, fichier inexistant";
}

    // dans le try, nous avons du code qui peut potentiellement planter
    // catch permet d'attraper l'erreur avant qu'elle ne soit affichée à l'utilisateur
    // dans le bloc catch, nous pouvons traiter l'erreur
    // la classe Error contient toutes les erreurs de PHP
    // l'objet $e contient les données de l'erreur (numéro de l'erreur, le fichier dans lequel elle se trouve, la ligne...)