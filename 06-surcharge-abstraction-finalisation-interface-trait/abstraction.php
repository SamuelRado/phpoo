<?php

abstract class Joueur
{
    public function connexion()
    {
        return $this->etreMajeur();
    }

    abstract public function etreMajeur();  // une méthode abstraite est vide de contenu
    abstract public function devise();
}

class JoueurFr extends Joueur
{
    public function etreMajeur()    // je suis obligé de redéfinir la méthode abstraite de la classe Mère
    {
        return 18;
    }

    public function devise()
    {
        return '€';
    }
}

class JoueurUs extends Joueur
{
    public function etreMajeur()
    {
        return 21;
    }

    public function devise()
    {
        return '$';
    }
}

$fr = new JoueurFr;
echo $fr->connexion();

/**
 * sur un site de jeu, un joueur a forcément une nationalité : on ne peut pas venir de nulle part
 * Joueur est une classe abstraite : elle ne peut pas être instanciée (new Joueur interdit)
 * 
 * une méthode abstraite n'a pas de corps (pas de contenu)
 * pour définir une méthode abstraite, elle doit appartenir à une classe abstraite
 * une classe abstraite n'a pas forcément de méthode abstraite
 * une classe qui hérite de méthodes abstraites doit les redéfinir
 * une classe abstraite peut contenir des méthodes normales
 */