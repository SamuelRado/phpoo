<?php

// un design pattern est une solution en réponse à plusieurs problèmes similaires rencontrés
// Problématique : comment créer une seule instance de classe ?

class Singleton
{
    public $id = 30;

    private static $instance = null;

    private function __construct(){}    // la classe n'est pas instanciable ('new' interdit)
    private function __clone(){}    // l'objet ne sera pas clonable

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            // si $instance est null, je dois instancier ma classe (créer un objet)
            self::$instance = new Singleton;
            echo "J'instancie la classe Singleton<br>";
        }
        return self::$instance; // dans tous les cas, je dois renvoyer une instance
    }
}

// $objet1 = new Singleton; donne une erreur car __construct() est privée
$objet1 = Singleton::getInstance(); // 1er appel : getInstance() créé une instance, la stocke, et la renvoie
var_dump($objet1);
echo "<br>";
// $objet2 = new Singleton; donne une erreur car __construct() est privée
$objet2 = Singleton::getInstance(); // 2ème appel : getInstance() renvoie directement l'instance stockée dans la classe
var_dump($objet2);
echo "<br>";

$objet2->id = 35;

echo $objet1->id . "<br>";
echo $objet2->id . "<br>";