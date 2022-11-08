<?php

class Animal
{
    protected function deplacement()
    {
        return "je me déplace<br>";
    }

    public function manger()
    {
        return "je mange chaque jour<br>";
    }
}
// protected : visible depuis la classe et les classes héritières

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "je suis un éléphant et " . $this->deplacement();
        // deplacement() est protected : Elephant en hérite donc deplacement() appartient aussi à Elephant
    }
}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "je suis un chat<br>";
    }

    public function manger()    // redéfinition de méthode
    {
        return "je mange comme un chat<br>";
    }
}

$eleph = new Elephant;
echo $eleph->manger();
echo $eleph->quiSuisJe();
// echo $eleph->deplacement(); deplacement() n'est pas accessible hors de la classe

$chat = new Chat;
echo $chat->manger();

// redéfinir une méthode : recréer la méthode dans une classe Fille et changer son comportement
// quand on appelle une méthode, dans le cas de l'héritage, l'interpréteur cherche d'abord dans la classe dont l'objet est issu, puis dans la classe Mère