<?php
//exo1
$chaine = "Aujourd'hui il fait - 1000 degrés";
$chaine = addslashes($chaine);

//exo2
$chaine2 = "je suis en minuscule";

echo strtoupper($chaine2) . "<br>";
echo ucfirst($chaine2) . "<br>";
echo ucwords($chaine2) . "<br>";

$chaine3 ="JE SUIS EN MAJUSCULE";

echo strtolower($chaine3) . "<br>";
echo lcfirst($chaine3) . "<br>";

//exo3
$chaine4 = "Je suis une chaine de caractere avec pas mal de mot, au moins 25 comme ça je suis content d'avoir fait l'exo et Jérôme aussi mdr";

echo str_word_count($chaine4) . "<br>";

//exo4
$chaine5 = "Je suis une chaine de caractere";
$array = explode(" ", $chaine5);

foreach ($array as $mot) {
    echo $mot . "<br>";
}

//exo5
$array2 = ["Je", "suis", "une", "chaine"];
$chaine6 = implode(" ", $array2);

//exo6
$chaine7 = "Je suis une chaine de caractere";
echo strrev($chaine7) . "<br>";

$array3 = explode(" ", $chaine7);
shuffle($array3);

foreach ($array3 as $mot) {
    echo $mot;
}
echo "<br>";

//exo7
$chaine8 = "Hello, nous apprenons PHP";

echo "<p>" . $chaine8 . "</p>";

echo $chaine8 . "<br>";

//exo8
$chaine9 = "Hello, nous apprenons PHP";

if(strlen($chaine9) < 500) {
    echo "|" . $chaine9;
}

//exo9
$chaine10 = "Je suis une chaine de caractere";
$array4 = str_split( $chaine10);

foreach ($array4 as $lettre) {
    echo $lettre . "<br>";
}

//exo10
$chaine11 = "Je suis une chaine de caractere";

echo str_replace("caractere", "world", $chaine11) . "<br>";

//exo11
$chaine12 = "Je suis une chaine de test";

if(strpos($chaine12, "test")) {
    echo "test est bien présent" . "<br>";
}
else {
    echo "test n'est pas présent" . "<br>";
}

//exo12
$chaine13 = "Je suis une chaine de test cool";

if(strpos(strstr($chaine13, "chaine", true), "suis")) {
    echo "Le mot est dedans" . "<br>";
}
else {
    echo "le mot n'est pas dedans" . "<br>";
}

//exo13
$chaine14 = "Je suis une chaine de test cool";

if(strpos(strstr($chaine14, "chaine"), "suis")) {
    echo "Le mot est dedans" . "<br>";
}
else {
    echo "le mot n'est pas dedans" . "<br>";
}