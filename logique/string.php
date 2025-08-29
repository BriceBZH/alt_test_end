<?php

//Créez une fonction qui prend une chaîne de caractères en paramètre et retourne sa longueur après avoir supprimé tous les espaces.

$chaine = "Bonjour le monde !";
$removeSpace = str_replace(" ", "", $chaine);
$nbCaract = strlen($removeSpace);

echo $nbCaract;

echo "<br /><br /><br />";
//Développez une fonction qui accepte un prénom en paramètre et renvoie une salutation personnalisée en mettant la première lettre en majuscule.

$prenom = "jean-pierre";
function bonjour(string $prenom) : string {
    return "Bonjour ".$prenom;
}
echo bonjour($prenom);

echo "<br /><br /><br />";
//Écrivez une fonction qui détermine si une chaîne de caractères se termine par un point d'exclamation.

$chaine = "Je suis très satisfait !";
function testCaract(string $chaine) : bool {
    $last = substr($chaine, -1);
    
    return $last == "!";
}
echo testCaract($chaine);

echo "<br /><br /><br />";
//Écrivez une fonction qui inverse l'ordre des mots

$frenchPhrase = "Je mange une pomme";

function reverseWords(string $frenchPhrase) : string {
    $ex = explode(" ", $frenchPhrase);
    $phrase = "";
    foreach(array_reverse($ex) as $word) {
        $phrase .= $word." ";
    }
    return trim($phrase);
}
echo reverseWords($frenchPhrase)." ";


echo "<br /><br /><br />";
//Écrivez une fonction qui compte le nombre d'occurrences d'une lettre dans une chaîne

$chaine = "bienvenue sur notre site web";
function nbOccString(string $letter, string $chaine) : int {
    return substr_count($chaine, $letter);
}
echo nbOccString("w", $chaine);

echo "<br /><br /><br />";
//Écrivez une fonction qui convertit une chaîne en "camelCase"

$sqlColumnName = "user_first_name";
function toCamelCase(string $sqlColumnName) : string {
    $ex = explode("_", $sqlColumnName);
    $finPhrase = "";
    foreach($ex as $word) {
        $finPhrase .= ucwords($word);
    }
    return lcfirst($finPhrase);
}
echo toCamelCase($sqlColumnName);

echo "<br /><br /><br />";
//Écrivez une fonction qui compte le nombre de voyelles dans une chaîne

$chaine = "Je suis très satisfait !";
function nbVoy(string $chaine) : int {
    $chaine = strtolower($chaine);
    $arrayVoy = ["a","à","â","e","é","è","ê","i","î","ï","o","ô","u","ù","û","ü","y"];
    $nbVoy = 0;
    foreach ($arrayVoy as $voy) {
        $nbVoy += substr_count($chaine, $voy);
    }
    return $nbVoy;
}
echo nbVoy($chaine);

echo "<br /><br /><br />";
//Écrivez une fonction qui alterne majuscules et minuscules dans une chaîne

$chaine = "bienvenue sur notre site web";
function altMinMaj(string $chaine) : string {
    $stringToArray = str_split($chaine);
    $endString = "";
    $i = 0;
    foreach($stringToArray as $carac) {
        if (ctype_alpha($carac)) {
            $endString .= ($i % 2 == 0) ? strtoupper($carac) : strtolower($carac);
            $i++;
        } else {
            $endString .= $carac;
        }
    }

    return $endString;
}
echo altMinMaj($chaine);

echo "<br /><br /><br />";
//Écrivez une fonction qui supprime les caractères en double consécutifs

// $messageUtilisateur = "Bonjouuuur !!! J'ai besoiiiin d'aide....";
// function removeDuplicates($messageUtilisateur) {

//     return 
// }

// echo "Message normalisé : " . $messageNettoye;

echo "<br /><br /><br />";
//Écrivez une fonction qui extrait les initiales d'un nom complet

function returnInitiale(string $nom) : string {
    $ex = explode(" ", $nom);
    $initiales = "";
    foreach($ex as $word) {
        $initiales .= strtoupper(substr($word, 0, 1));
    }
    return $initiales;
}

echo returnInitiale("brice rubeaux");

echo "<br /><br /><br />";
//Écrivez une fonction qui masque les caractères d'une chaîne sauf les N derniers

// $cardNumber = "1234567890123456";
// function maskString(string $cardNumber, int $visible) : string {
//     return substr($cardNumber, 4, -1);
// }
// echo maskString($cardNumber, 4);

echo "<br /><br /><br />";
//Écrivez une fonction qui vérifie si une chaîne est un palindrome


function isPalindrome(string $chaine): bool {
    $chaine = mb_strtolower($chaine, 'UTF-8');
    $replacements = ['à'=>'a', 'â'=>'a', 'ä'=>'a', 'é'=>'e', 'è'=>'e', 'ê'=>'e', 'ë'=>'e', 'î'=>'i', 'ï'=>'i', 'ô'=>'o', 'ö'=>'o', 'ù'=>'u', 'û'=>'u', 'ü'=>'u', 'ÿ'=>'y', 'ç'=>'c'];
    $chaine = strtr($chaine, $replacements);
    $chaine = preg_replace('/[^a-z]/', '', $chaine);
    $inverse = implode('', array_reverse(mb_str_split($chaine)));
    return $chaine === $inverse;
}

$slogan = "Eh ! ça va la vache ?";
var_dump(isPalindrome($slogan)); // bool(true)

echo "<br /><br /><br />";
//Écrivez une fonction qui trouve la plus longue séquence de caractères identiques

echo "<br /><br /><br />";
//Écrivez une fonction qui formate un texte en ajoutant des points de suspension

$description = "Ceci est une très longue description d'un produit";
function truncate(string $chaine, $lim) : string {
    $coup = $lim - 3;
    $trunc = mb_substr($chaine, 0, $coup, 'UTF-8');
    return $trunc."...";
}
echo truncate($description, 20);

echo "<br /><br /><br />";
//Écrivez une fonction qui capitalise la première lettre de chaque mot

$chaine = "bienvenue sur notre site web";
function capitalizeWords(string $chaine) : string {
    $chaine = strtolower($chaine);
    $exChaine = explode(" ", $chaine);
    $endChaine = "";
    foreach($exChaine as $word) {
        $endChaine .= ucfirst($word)." ";
    }

    return trim($endChaine);
}
echo capitalizeWords($chaine);