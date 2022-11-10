<?php

/*

// pour chaque point, il faut afficher le nb d'enregistrements affectés et les données des enregistrements via foreach() et echo()
// foreach($tableau AS $unElementDuTableau) {}

-- 1: Brad Tipp est un homme qui s'est fait engager le 26/04/2016 au service comptabilité. Son salaire de départ est de 2500€.
-- 2: 3 mois plus tard, le même jour, sa femme Angie a rejoint leur service commercial. Son salaire de départ est 2650€.
-- 3: Brad a reçu une augmentation de 100€.
-- 4: Angie a reçu une augmentation de 150€ et passe au service informatique.
-- 5: Brad est promu à la direction et son salaire augmente de 1300€
-- 6: La crise sanitaire contraint l'entreprise à renvoyer tous les employés embauchés avant 2005 sauf Jean-Pierre Laborde.

*/

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


echo "<h1>1 : arrivée de Brad</h1>";

$nb = $pdo->exec("INSERT INTO employes VALUES (null, 'Brad', 'Tipp', 'm', 'comptabilite', '2016-04-26', 2500)");

echo "$nb employé a été inséré<br>";

$resultat = $pdo->query("SELECT * FROM employes WHERE prenom = 'Brad' AND nom = 'Tipp'");  // renvoie un objet PDOStatement

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

foreach ($donnees as $employe) {
    // var_dump($employe);
    // à chaque tour de boucle, $employe va contenir 1 case du tableau $donnees
    // $donnees est un tableau multidimensionnel, donc $employe est un tableau

    foreach ($employe as $valeur) {
        echo "$valeur<br>";
    }
}


echo "<h1>2 : arrivée de Angie</h1>";

$nb = $pdo->exec("INSERT INTO employes VALUES (null, 'Angie', 'Tipp', 'f', 'commercial', '2016-07-26', 2650)");

echo "$nb employé a été inséré<br>";

$resultat = $pdo->query("SELECT * FROM employes WHERE prenom = 'Angie' AND nom = 'Tipp'");  // renvoie un objet PDOStatement

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

foreach ($donnees as $employe) {
    foreach ($employe as $valeur) {
        echo "$valeur<br>";
    }
}

echo "<h1>3 : augmentation de Brad</h1>";

$nb = $pdo->exec("UPDATE employes SET salaire = salaire + 100 WHERE prenom = 'Brad' AND nom = 'Tipp'");

echo "$nb employés ont été modifiés<br>";

echo "<h1>4 : augmentation et changement de service d'Angie</h1>";

$nb = $pdo->exec("UPDATE employes SET salaire = salaire + 150, service = 'informatique' WHERE prenom = 'Angie' AND nom = 'Tipp'");

echo "$nb employés ont été modifiés<br>";

echo "<h1>5 : renvoi des employés</h1>";

$nb = $pdo->exec("DELETE FROM employes WHERE date_embauche < '2005-01-01' AND NOT id_employes = 350");

echo "$nb employés ont été renvoyés<br>";