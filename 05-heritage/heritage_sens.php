<?php

class A
{
    public function test1()
    {
        return "test1<br>";
    }
}

class B extends A 
{
    public function test2()
    {
        return "test2<br>";
    }
}

class C extends B 
{
    public function test3()
    {
        return "test3<br>";
    }
}

$c = new C;
echo $c->test1();
echo $c->test2();
echo $c->test3();

/*
    Transitivité : si C hérite de B et B hérite de A, alors C hérite de A

    L'héritage en PHP est :
        - Non réflexif : class D extends D // erreur, une classe ne peut pas hériter d'elle-même
        - Non symétrique : class F extends E // F hérite de E, mais E n'hérite pas de F
        - Non cyclique : class X extends Y, class Y extends Z, class Z extends X // erreur

        Pas d'héritage multiple en PHP : class X extends Y, Z // erreur
*/