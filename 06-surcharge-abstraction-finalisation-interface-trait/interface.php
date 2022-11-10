<?php

interface Mouvement
{
    public function seDeplacer();
}

class Bateau implements Mouvement
{
    public function seDeplacer()
    {
        return "je navigue";
    }
}

class Avion implements Mouvement
{
    public function seDeplacer()
    {
        return "je vole";
    }
}

// new Mouvement : erreur, une interface n'est pas instanciable

/**
 * une interface est une liste de méthodes abstraites
 * une interface n'est pas instanciable
 * pour utiliser une interface, on utilise le mot-clef 'implements'
 * toutes les méthodes d'une interface doivent être publique et redéfinies
 * on peut implémenter plusieurs interfaces (class C implements InterfaceA, InterfaceB)
 * 
 * une interface permet de garantir que les classes qui l'implémente contiennent les mêmes méthodes avec la même orthographe : c'est un contrat
 */