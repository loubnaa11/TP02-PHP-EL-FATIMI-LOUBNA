<!DOCTYPE html>
<html lang="fr>
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5 - Conditions</h1>
    <?php
    $moyenne = 12;
    if($moyenne <0 || $moyenne >20){
        echo"note invalide <br>";
        } elseif ($moyenne < 10) {
        echo "<p>Résultat : Non validé</p>";
    } elseif ($moyenne < 12) {
        echo "<p>Résultat : Passable</p>";
    } elseif ($moyenne < 14) {
        echo "<p>Résultat : Assez bien</p>";
    } elseif ($moyenne < 16) {
        echo "<p>Résultat : Bien</p>";
    } else {
        echo "<p>Résultat : Très bien</p>";
    }
    ?>
</body>
</html>
