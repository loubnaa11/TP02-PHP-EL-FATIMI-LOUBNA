<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8 — Contrôle des boucles</title></head>
<body>
<h1>Exercice 8 — Contrôle des boucles</h1>
<?php
//Exercice8
echo "<h2>1. Nombres pairs</h2>";
$nombre = 0;
while ($nombre <= 20) {
    if ($nombre == 10) {
        echo "<strong>$nombre</strong><br>";
    } else {
        echo "$nombre<br>";
    }
    $nombre += 2;
}
echo "<h2>2. while et do-while</h2>";
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}
// Réinitialisation pour comparer les mêmes conditions de départ.
$compteur = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
echo "<p>while : $executionsWhile exécution</p>";
echo "<p>do-while : $executionsDoWhile exécution</p>";
echo "<h2>3. break et continue</h2>";
for ($i = 1; $i <= 20; $i++) {
    if ($i >= 16) {
        break;
    }
    if ($i % 3 == 0) {
        continue;
    }
    echo "$i ";
}
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>