<?php

// namespace style procédural

namespace A 
{
    function ville()
    {
        return "Paris";
    }
}

namespace B
{
    function ville()
    {
        return "Lyon";
    }
}

// echo A\ville();
// erreur : il est interdit d'écrire du code après avoir défini un namespace
// nous devons créer un fichier d'appel