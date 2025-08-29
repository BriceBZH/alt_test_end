<?php

//Écrivez une fonction qui filtre un tableau d'objets selon une propriété et sa valeur
function filterByProperty (array $users, string $val, bool $etat) : array {
    $tab = [];
    foreach($users as $user) {
        if(isset($user[$val]) && $user[$val] === $etat) {
            $tab[] = $user;
        }
    }
    return $tab;
}
$users = [
    ["id" => 1, "name" => "Alice", "age" => 25, "active" => true],
    ["id" => 2, "name" => "Bob", "age" => 30, "active" => false],
    ["id" => 3, "name" => "Charlie", "age" => 35, "active" => true]
];
print_r(filterByProperty($users, 'active', true));

echo "<br /><br /><br />";
//Écrivez une fonction qui groupe les éléments d'un tableau selon une propriété

function groupBy(array $products, string $val) : array {
    $tab = [];
    foreach($products as $product) {
        if(isset($product[$val])) {
            $item = $product[$val];
            if(!isset($tab[$item])) {
                $tab[$item] = [];
            }
            $tab[$item][] = $product;
        }
    }
    return $tab;
}
$products = [
    ["id" => 1, "name" => "Laptop", "category" => "Electronics", "price" => 999],
    ["id" => 2, "name" => "Smartphone", "category" => "Electronics", "price" => 699],
    ["id" => 3, "name" => "T-shirt", "category" => "Clothing", "price" => 29]
];
print_r(groupBy($products, 'category'));

echo "<br /><br /><br />";
//Écrivez une fonction qui trouve l'intersection entre deux tableaux d'objets selon une propriété donnée

function findIntersection(array $library1, array $library2, string $val) : array {
    
}
$library1 = [
    ["id" => 1, "title" => "1984", "author" => "Orwell", "available" => true],
    ["id" => 2, "title" => "Dune", "author" => "Herbert", "available" => false]
];
$library2 = [
    ["id" => 3, "title" => "1984", "author" => "Orwell", "available" => true],
    ["id" => 4, "title" => "Foundation", "author" => "Asimov", "available" => true]
];
print_r(findIntersection($library1, $library2, 'title'));

echo "<br /><br /><br />";
//Écrivez une fonction qui transforme un tableau d'objets en utilisant une fonction de mapping personnalisée

echo "<br /><br /><br />";
//Écrivez une fonction qui agrège les données d'un tableau d'objets

function aggregateData(array $transactions, string $category, string $valeur) : array {
    $tab = [];
    foreach($transactions as $transaction) {
        $categ = $transaction[$category];
        $val = $transaction[$valeur];
        if(!isset($tab[$categ])) {
            $tab[$categ] = 0;
        }
        $tab[$categ] += $val;
    }
    return $tab;
}
$transactions = [
    ["id" => 1, "type" => "debit", "amount" => 100, "category" => "Food"],
    ["id" => 2, "type" => "debit", "amount" => 50, "category" => "Food"],
    ["id" => 3, "type" => "credit", "amount" => 75, "category" => "Income"]
];
print_r(aggregateData($transactions, 'category', 'amount'));