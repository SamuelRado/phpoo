<?php

class Membre
{
    public $id = 15;
    public $pseudo = "sam";
    public $mdp = "admin";

    public function __construct()
    {   
        echo "Bonjour internaute !<hr>";
    }

    public function inscription()
    {
        return "Je m'inscris<hr>";
    }

    public function connexion()
    {
        return "Je me connecte<hr>";
    }
}

class Admin extends Membre  // extends : héritage, comme si on copiait-collait le code de Membre dans Admin
{
    public function accesBackOffice()
    {
        return "Accès backoffice autorisé<hr>";
    }
}

$admin = new Admin;
echo $admin->connexion();
echo $admin->accesBackOffice();

/*
    Sur un site web, un admin est aussi un membre : il a les mêmes droits qu'un membre.
    Au lieu de copier le code d'une classe à une autre, on utilise l'héritage : la classe Admin possède les mêmes attributs et méthodes que la classe Membre
*/