<?php

function inclusionAutomatique($nomDeLaClasse)
{
    require_once($nomDeLaClasse . ".class.php");
    // ex: require_once("A.class.php");

    echo "On passe dans inclusionAutomatique !<br>";
}

spl_autoload_register('inclusionAutomatique');

/**
 * spl_autoload_register() se lance automatiquement lorsque l'interpréteur voit passer un 'new'
 * elle prend en param le nom d'une fonction à exécuter
 * le nom à côté du 'new' est récupéré et transmis à inclusionAutomatique()
 * Il est indispensable de respecter une convention de nommage sur les fichiers pour que l'autoload fonctionne
 */