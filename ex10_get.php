<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 10 — Traitement GET</title></head>
<body>
<h1>Exercice 10 — Traitement GET</h1>
<?php
//EX10 get php
if (!isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    echo "<p>Veuillez remplir et envoyer le formulaire.</p>";
} elseif (!is_string($_GET['nom']) || !is_string($_GET['prenom'])
          || !is_string($_GET['groupe'])) {
    echo "<p>Format des données invalide.</p>";
} else {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Tous les champs sont obligatoires.</p>";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "<p>Groupe invalide.</p>";
    } else {
        // Échapper les données uniquement au moment de leur affichage HTML.
        $nomHTML = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomHTML = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        echo "<p>Bonjour $prenomHTML $nomHTML, bienvenue dans le groupe $groupeHTML.</p>";
    }
}
?>
<p><a href="ex10_get.html">Retour au formulaire</a></p>
<p><a href="index.php">Accueil</a></p>
</body>
</html>