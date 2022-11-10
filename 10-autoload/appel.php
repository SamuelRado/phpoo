<?php

// require_once('A.class.php');
// require_once('B.class.php');
// require_once('C.class.php');
// require_once('D.class.php');
require_once('autoload.php');

$a = new A;
$b = new B;
$c = new C;
$d = new D;

/**
 * Si nous voulons utiliser 100 classes, il faudrait faire 100 inclusions de fichiers.
 * Nous allons créer une fonction qui permet d'inclure tous les fichiers dont j'ai besoin.
 */