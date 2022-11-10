<?php

final class Application // final signifie que la classe ne peut pas être héritée
{
    public function lancementApplication()
    {
        return "L'appli se lance comme ça";
    }
}

// class Extension extends Application // erreur

$app = new Application;
echo $app->lancementApplication() . "<hr>";

class Application2
{
    final public function lancementApplication2()   // une méthode finale ne peut pas être redéfinie
    {
        return "L'appli2 se lance comme ça";
    }
}

class Extension2 extends Application2
{
    //  public function lancementApplication2(){} // erreur
}

$ext = new Extension2;
echo $ext->lancementApplication2() . "<hr>";

/**
 * une classe finale ne peut pas être héritée
 * toutes les méthodes d'une classe finale ne peuvent pas être redéfinies
 * une classe finale est instanciable
 * une classe normale peut comporter des méthodes finales
 * l'intérêt d'une méthode finale est de conserver son comportement lors d'un héritage
 */