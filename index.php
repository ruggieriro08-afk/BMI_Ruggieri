<?php

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altezza = $_POST["altezza"];

$bmi = $peso / pow($altezza / 100, 2);

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

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il tuo BMI</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Il tuo BMI</h2>

    <main>

        <div class="card <?php echo $classe; ?>">

            <h3><?php echo $nome; ?></h3>

            <p class="dati">
                Peso <?php echo $peso; ?> kg ·
                Altezza <?php echo $altezza; ?> cm
            </p>

            <div class="bmi">
                <?php echo number_format($bmi, 2); ?>
            </div>

            <div class="categoria">
                <?php echo $categoria; ?>
            </div>

        </div>

        <a href="index.html">Calcola di nuovo</a>

    </main>

</body>
</html>