<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03</title>
</head>
<body>
    <h1>Exercice 03 - Calculs et Constantes</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $montantTVA;

    $totalFinal = $totalTTC;
    $totalFinal += 15;

    echo "<h3>Récapitulatif de la commande :</h3>";
    echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
    echo "<p>Montant TVA (" . TAUX_TVA . "%) : $montantTVA " . DEVISE . "</p>";
    echo "<p>Total TTC : $totalTTC " . DEVISE . "</p>";
    echo "<p>Total Final (avec 15 MAD de livraison) : $totalFinal " . DEVISE . "</p>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est bien définie.</p>";
    }
    ?>
</body>
</html>