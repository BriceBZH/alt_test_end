<?php

//Écrivez une fonction qui récupère toutes les valeurs d'un objet
$scores = [
    "level1" => 100,
    "level2" => 85,
    "level3" => 95
];

function getValues(array $scores) {
    $getVal = [];
    foreach ($scores as $score) {
        $getVal[] = $score;
    }
    return $getVal;
}

print_r(getValues($scores));

echo "<br /><br /><br />";
//Écrivez une fonction qui transforme les valeurs d'un objet



echo "<br /><br /><br />";
//Écrivez une fonction qui fusionne deux objets en sommant les valeurs numériques communes



echo "<br /><br /><br />";
//Écrivez une fonction qui filtre un objet selon une condition sur les valeurs


echo "<br /><br /><br />";
//Écrivez une fonction qui convertit un objet plat en objet imbriqué en utilisant les points comme séparateurs

echo "<br /><br /><br />";
//Écrivez une fonction qui trouve les clés d'un objet ayant une valeur spécifique

function findKeysByValue(array $tab, int $key) {
    $fin = [];
    foreach($tab as $val => $clef) {
        echo $val." ".$clef."<br />";
    }
}
$productStock = [
    "laptop" => 0,
    "mouse" => 5,
    "keyboard" => 0,
    "monitor" => 3
];
print_r(findKeysByValue($productStock, 0));
// ["laptop", "keyboard"]


echo "<br /><br /><br />";
//Écrivez une fonction qui crée un objet à partir de deux tableaux



echo "<br /><br /><br />";
//Écrivez une fonction qui compte les occurrences de valeurs dans un objet


echo "<br /><br /><br />";
//Écrivez une fonction qui extrait certaines propriétés d'un objet

echo "<br /><br /><br />";
//Écrivez une fonction qui trie les propriétés d'un objet par valeur

echo "<br /><br /><br />";
//Écrivez une fonction qui trouve la valeur maximale dans un objet de nombres
echo "<br /><br /><br />";
//Écrivez une fonction qui créé un objet à partir d'un tableau de paires clé-valeur

echo "<br /><br /><br />";
//Écrivez une fonction qui recherche une valeur dans un objet imbriqué
echo "<br /><br /><br />";
//Écrivez une fonction qui groupe les objets par une propriété spécifique
echo "<br /><br /><br />";
//Écrivez une fonction qui vérifie si un objet correspond à un schéma spécifique
echo "<br /><br /><br />";
//Écrivez une fonction qui compare les modifications entre deux objets
echo "<br /><br /><br />";
//Écrivez une fonction qui convertit un objet en chaîne de paramètres d'URL
echo "<br /><br /><br />";
//Écrivez une fonction qui génère un résumé statistique d'un objet contenant des nombres