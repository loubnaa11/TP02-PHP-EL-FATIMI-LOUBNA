<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 10 — Traitement POST</title></head>
<body>
<h1>Exercice 10 — Traitement POST</h1>
<?php
// Ne lire les champs que lorsqu'ils existent et sont des chaînes.
// is_string() permet aussi de refuser des paramètres comme nom[]=Amine.
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    echo "<p>Veuillez remplir et envoyer le formulaire.</p>";
} elseif (!is_string($_POST['nom']) || !is_string($_POST['prenom'])
          || !is_string($_POST['groupe'])) {
    echo "<p>Format des données invalide.</p>";
} else {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Tous les champs sont obligatoires.</p>";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "<p>Groupe invalide.</p>";
    } else {
        // Échapper les données uniquement au moment de leur affichage HTML.
        $nomHTML = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomHTML = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeHTML = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<p>Bonjour $prenomHTML $nomHTML, bienvenue dans le groupe $groupeHTML.</p>";
    }
}
?>
<p><a href="ex10_post.html">Retour au formulaire</a></p>
<p><a href="index.php">Accueil</a></p>
</body>
</html>