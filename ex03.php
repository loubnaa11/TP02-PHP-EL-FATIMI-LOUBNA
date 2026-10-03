<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03</title>
</head>
<body>
    <h1>Exercice 03</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prix_unitaireHT = 60;
    $quantite = 3;

    $total_HT = $prix_unitaireHT * $quantite;
    $montant_TVA = $total_HT * (TAUX_TVA / 100);
    $total_TTC = $total_HT + $montant_TVA;

    $totalfinal = $total_TTC;
    $totalfinal += 15;

    echo "<h3>Récapitulatif de la commande :</h3>";
    echo "<p>Total HT : $total_HT " . DEVISE . "</p>";
    echo "<p>Montant TVA (" . TAUX_TVA . "%) : $montant_TVA " . DEVISE . "</p>";
    echo "<p>Total TTC : $total_TTC " . DEVISE . "</p>";
    echo "<p>Total Final (avec 15 MAD de livraison) : $totalfinal " . DEVISE . "</p>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est bien définie.</p>";
    }
    ?>
</body>
</html>