<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 9 — Tableaux et foreach</title></head>
<body>
<h1>Exercice 9 — Tableaux et foreach</h1>
<?php
//Exercice9
$notes = ["Amine" => 12, "Sara" => 16, "Youssef" => 8,
          "Lina" => 14, "Adam" => 10];
$somme = 0;
$nombreValides = 0;
$meilleureNote = -1; // Les notes entre 0 et 20.
$meilleurEtudiant = "";
echo '<table border="1"><tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>';
foreach ($notes as $nom => $note) {
    $somme += $note;
    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
    echo "<tr><td>$nom</td><td>$note</td><td>$resultat</td></tr>";
}
    echo "</table>";
$moyenne = $somme / count($notes);
echo "<p>Somme : $somme</p>";
echo "<p>Moyenne : $moyenne</p>";
echo "<p>Étudiants ayant validé : $nombreValides</p>";
echo "<p>Meilleure note : $meilleurEtudiant, $meilleureNote/20</p>";
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>