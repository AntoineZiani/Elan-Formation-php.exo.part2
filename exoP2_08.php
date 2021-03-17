<h1>EXERCICE 8</h1>

<a href=".">Retour</a>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 2);
echo repeterImageV2($url, 3);
echo str_repeat("<img src='$url' alt='chien'>", 4);

function repeterImage(string $url = "", int $nb = 0) {
    $result = "";
    for($i = 1; $i <= $nb ; $i++){
        $result .= "<img src='$url' alt='chien'>";
    }
    return $result;
}

function repeterImageV2(string $url = "", int $nb = 0) {
    $result = "";
    foreach (range(1, $nb) as $index) {
        $result .= "<img src='$url' alt='chien'>";
    }
    return $result;
}
