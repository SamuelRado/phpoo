<?php

// PDO : Php Data Object : permet d'exécuter des requêtes SQL depuis un fichier PHP

// nous devons créer une instance de la classe PDO pour nous connecter à la BDD

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

/**
 * le constructeur de PDO prend 4 arg :
 *  - dsn : driver utilisé (mysql), où se trouve la bdd, nom de la bdd
 *  - pseudo de connexion au serveur
 *  - mdp de connexion au serveur
 *  - tableau d'options facultatives
 *      - ERRMODE => ERRMODE_WARNING : permet d'afficher erreurs PDO en tant que warning
 *      - INIT_COMMAND : permet de lancer une commande (ici, utilisation de l'encodage utf8)
 */


echo "<h1>Select + query() + fetch()</h1>";

$resultat = $pdo->query("SELECT * FROM employes");
// query() est une méthode de la classe PDO
// elle prend en param une requête SQL et renvoie un objet PDOStatement ou false en cas d'échec de la requête
// var_dump($resultat);

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);
// fetchAll() est une méthode de la classe PDOStatement
// elle renvoie toutes les données du résultat de la requête SQL dans un tableau
// l'option FETCH_ASSOC permet de renvoyer un tableau associatif (les index sont les noms des colonnes de la table sql)
// on utilise fetchAll() seulement lors d'une requête sql SELECT car c'est la seule requête qui renvoie des données

// print "<pre>";
// print_r($donnees);
// print "</pre>";

echo "<h1> prepare() + execute()</h1>";

echo "marqueur du ':'<br>";

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom LIKE :nomDemande");

// prepare() est une méthode de la classe PDO qui permet de préparer et d'assainir une requête sql
// elle prend en param une requête sql
// elle permet de contrer les injections sql

$resultat->execute([":nomDemande" => "Tho%"]);
// execute() est une méthode de la classe PDOStatement
// elle permet d'exécuter une requête préparée via prepare()
// elle peut prendre en param un tableau qui permet d'indiquer à quoi correspondent nos marqueurs (on 'bind' les marqueurs à des valeurs)

// $donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);   // récupération du résultat sous forme d'un tableau associatif

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);

// fetch() est une méthode de la classe PDOStatement
// elle renvoie un tableau simple qui représente 1 résultat

// print "<pre>";
// print_r($donnees);
// print "</pre>";


echo "<h1>exemple insert into</h1>";

$nbEnregistrementsAffectes = $pdo->exec("INSERT INTO employes VALUES ('null', 'prenomTest', 'nomTest', 'm', 'informatique', '2022-11-10', 3000)");
// une date est une string au format aaaa-mm-jj

echo "il y a eu $nbEnregistrementsAffectes employés insérés dans la table employes<br>";

$resultat->execute([":nomDemande" => "%nomTest%"]);
// je réexécute la requête déjà préparée ligne 41

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

print "<pre>";
print_r($donnees);
print "</pre>";

echo "<h1>exemple update</h1>";

$nbEnregistrementsAffectes = $pdo->exec("UPDATE employes SET salaire=5000 WHERE id_employes=350");

// exec() est une méthode de la classe PDO
// elle prend en param une requête sql
// elle renvoie le nombre d'enregistrements affectés par la requête ou false s'il y a eu un probleme

echo "mise à jour du salaire de $nbEnregistrementsAffectes personnes<br>";

echo "<h1>exemple delete</h1>";

$nbEnregistrementsAffectes = $pdo->exec("DELETE FROM employes WHERE nom = 'nomTest'");

echo "suppression de $nbEnregistrementsAffectes employés test<br>";


/**
 * exec() est utilisé lors d'une requête de manipulation (insert into, update, delete)
 * query() est utilisé lors d'une requête de selection (select)
 * prepare() execute() est utilisé lors d'une requête de manipulation ou selection avec des données utilisateurs (qui viennent d'un formulaire)
 */