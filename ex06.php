<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6 - Switch et Date</h1>
    <?php
    $numeroMois=(int) date("m");

    switch ($numeroMois) {
        case 1:  echo "<p>Mois : Janvier</p>"; break;
        case 2:  echo "<p>Mois : Février</p>"; break;
        case 3:  echo "<p>Mois : Mars</p>"; break;
        case 4:  echo "<p>Mois : Avril</p>"; break;
        case 5:  echo "<p>Mois : Mai</p>"; break;
        case 6:  echo "<p>Mois : Juin</p>"; break;
        case 7:  echo "<p>Mois : Juillet</p>"; break;
        case 8:  echo "<p>Mois : Août</p>"; break;
        case 9:  echo "<p>Mois : Septembre</p>"; break;
        case 10: echo "<p>Mois : Octobre</p>"; break;
        case 11: echo "<p>Mois : Novembre</p>"; break;
        case 12: echo "<p>Mois : Décembre</p>"; break;
        default: echo "<p>Numéro de mois invalide</p>"; break;
    }
    ?>
</body>
</html>