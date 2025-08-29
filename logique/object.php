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


function transformValues(array $euros, callable $convert): array {
    $tab = [];
    foreach($euros as $article => $euro) {
        $tab[$article] = $convert($euro);
    }
    return $tab;
}
$pricesInEuros = [
    "book" => 20,
    "pen" => 5,
    "notebook" => 10
];
$toDollars = function($euros) { return $euros * 1.1; };
print_r(transformValues($pricesInEuros, $toDollars));

echo "<br /><br /><br />";
//Écrivez une fonction qui fusionne deux objets en sommant les valeurs numériques communes

function mergeObjects(array $tab1, array $tab2) : array {
    $tab = [];
    foreach($tab1 as $month => $sold) {
        $tab[$month] = $sold + $tab2[$month];
    }
    return $tab;
}
$store1Sales = [
    "january" => 1000,
    "february" => 1200,
    "march" => 900
];
$store2Sales = [
    "january" => 800,
    "february" => 950,
    "march" => 1100
];
print_r(mergeObjects($store1Sales, $store2Sales));

echo "<br /><br /><br />";
//Écrivez une fonction qui filtre un objet selon une condition sur les valeurs

function filterObject(array $inventory, callable $valeur) {
    return array_filter($inventory, $valeur);
}
$inventory = [
    "laptop" => 0,
    "smartphone" => 5,
    "tablet" => 0,
    "headphones" => 8
];
print_r(filterObject($inventory, function($stock) { return $stock === 0; }));

echo "<br /><br /><br />";
//Écrivez une fonction qui convertit un objet plat en objet imbriqué en utilisant les points comme séparateurs

// function flatToNested($flatConfig) {

// }
// $flatConfig = [
//     'app.name' => 'MyApp',
//     'app.version' => '1.0.0',
//     'database.host' => 'localhost',
//     'database.port' => 5432
// ];
// print_r(flatToNested($flatConfig));

echo "<br /><br /><br />";
//Écrivez une fonction qui trouve les clés d'un objet ayant une valeur spécifique

function findKeysByValue(array $tab, int $key) : array {
    $fin = [];
    foreach($tab as $val => $clef) {
        if($clef == $key) {
            $fin[] = $val;
        }
    }
    return $fin;
}
$productStock = [
    "laptop" => 0,
    "mouse" => 5,
    "keyboard" => 0,
    "monitor" => 3
];
print_r(findKeysByValue($productStock, 0));


echo "<br /><br /><br />";
//Écrivez une fonction qui crée un objet à partir de deux tableaux

function createObjectFromArrays(array $players, array $scores) : array {
    $tab = [];
    foreach($players as $index => $player) {
        $tab[$player] = $scores[$index];
    }
    return $tab;
}
$playerNames = ["Alice", "Bob", "Charlie"];
$scores = [100, 85, 90];
print_r(createObjectFromArrays($playerNames, $scores));


echo "<br /><br /><br />";
//Écrivez une fonction qui compte les occurrences de valeurs dans un objet

function countValues(array $order) : array {
    return array_count_values($order);
}
$orderStatuses = [
    "order1" => "pending",
    "order2" => "delivered",
    "order3" => "pending",
    "order4" => "cancelled",
    "order5" => "pending"
];
print_r(countValues($orderStatuses));

echo "<br /><br /><br />";
//Écrivez une fonction qui extrait certaines propriétés d'un objet

function extractProperties($userProfile, $publicInfo) {
    $tab = [];
    foreach($publicInfo as $info) {
        if(array_key_exists($info, $userProfile)) {
            $tab[$info] = $userProfile[$info];
        }
    }
    return $tab;
}
$userProfile = [
    "name" => "Jean Martin",
    "email" => "jean@email.com",
    "password" => "secret123",
    "age" => 35,
    "address" => "123 rue Principal"
];
$publicInfo = ["name", "age"];
print_r(extractProperties($userProfile, $publicInfo));

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