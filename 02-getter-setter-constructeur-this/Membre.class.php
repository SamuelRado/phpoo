<?php

/*
    - Créez une classe Membre
    - Créez 2 propriétés privées $pseudo & $mdp
    - Créez les setters & getters correspondant
    - Il faut que le mdp contienne entre 5 et 10 caractères (strlen() ou iconv_strlen())
*/

class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo($nouveauPseudo)
    {
        // strlen() renvoie la taille en octets du paramètre
        // iconv_strlen() renvoie le nombre de caractères du paramètre

        if(is_string($nouveauPseudo))
        {
            if(iconv_strlen($nouveauPseudo) >= 5 && iconv_strlen($nouveauPseudo) <= 10)
            {
                $this->pseudo = $nouveauPseudo;
            }
            else
            {
                echo "Erreur dans le nombre de caractères<br />";
            }
        }
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMdp($nouveauMdp)
    {
        if(is_string($nouveauMdp))
        {
            if(iconv_strlen($nouveauMdp) >= 5 && iconv_strlen($nouveauMdp) <= 10)
            {
                $this->mdp = $nouveauMdp;
            }
        }
    }

    public function getMdp()
    {
        return $this->mdp;
    }
}

$membre = new Membre;
$membre->setPseudo("rooot");
echo $membre->getPseudo() . "<br />";
$membre->setMdp("admin");
echo $membre->getMdp() . "<br />";


// function renvoyerPhrase()
// {
//     return "Bonjour";
// }
// $phrase = renvoyerPhrase();
