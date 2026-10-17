<?php
<link rel="stylesheet" href="style.css">

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altezza = $_POST["altezza"];

$bmi = $peso / pow($altezza / 100, 2);

echo "<h1>Il tuo BMI</h1>";

if ($bmi < 18.5) {

    $classe = "sottopeso";
    $categoria = "SOTTOPESO";

} elseif ($bmi < 25) {

    $classe = "normopeso";
    $categoria = "NORMOPESO";

} elseif ($bmi < 30) {

    $classe = "sovrappeso";
    $categoria = "SOVRAPPESO";

} else {

    $classe = "obesita";
    $categoria = "OBESITÀ";

}

?>