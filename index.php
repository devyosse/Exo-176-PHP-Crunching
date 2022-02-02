<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

//Exercise

echo "Ce dico contient : " . count($dico) . " mots <br>" ;

$carac15 = 0;
$w = 0;
$q = 0;

for ($i = 0; $i < count($dico); $i++){
    if (strlen($dico[$i]) === 16){
        $carac15++;
    }
    if (strpos($dico[$i], "w")){
        $w++;
    }
    if (strpos($dico[$i], "q")){
        $q++;
    }
}

echo "15 caractères : " . $carac15 . " mot <br>";
echo "Nombres de mots contenant la lettres w : " . $w . " mots<br>";
echo "Nombres de mots contenant la lettres q : " . $q . " mots <br>";

echo "<br>";

//List of film

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

//Exercise

$dix = 1;
for ($n = 1; $n < 11; $n++){
    echo $dix++ . " " . $top[$n]["im:name"]["label"] . "<br>";
}

$gravity = "Gravity";

$pos =

