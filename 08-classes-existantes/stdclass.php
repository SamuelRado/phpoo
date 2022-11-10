<?php

$tab = array('orange', 'pomme', 'fraise');
// var_dump($tab);

$objet = (object) $tab; // cast : transformation d'un type de variable en un autre
// var_dump($objet);

$objet2 = new stdClass;
$objet2->test = 42;
var_dump($objet2);


/**
 * Un objet fait partie de la classe stdClass lorsque celui-ci n'a pas été instancié par un 'new'
 * Il est possible d'instancier explicitement la classe stdClass
 */