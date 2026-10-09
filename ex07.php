<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Ecercice 07 - Boucles</h1>
    <section>
        <h2>Table de multiplication</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            echo"$nombre x $i = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>
    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre><?php
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "\n";
        }
        ?></pre>
    </section>
</body>