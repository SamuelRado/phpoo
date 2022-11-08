<?php

class Maitre
{
    private $midichloriens;
    private $nom;

    public function getMidiclhoriens()
    {
        return $this->midichloriens;
    }

    public function setMidichloriens($arg)
    {
        $this->midichloriens = $arg;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($arg)
    {
        $this->nom = $arg;
    }

    public function attaquer()
    {
        return "J'attaque<br>";
    }
}

class Jedi extends Maitre
{
    public function attaquerEnnemi(Sith $s)
    {
        return "j'attaque " . $s->getNom() . "<br>";
    }
}

class Sith extends Maitre
{
    public function attaquerEnnemi(Jedi $j)
    {
        return "j'attaque " . $j->getNom() . "<br>";
    }
}

$jedi = new Jedi;
$sith = new Sith;
$sith->setNom("méchant");

echo $jedi->attaquerEnnemi($sith);