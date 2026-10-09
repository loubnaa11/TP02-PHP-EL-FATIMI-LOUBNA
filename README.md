# TP02-PHP-EL-FATIMI-LOUBNA
TP 02 PHP — Programmation Web 2 — 2026/2027
Nom : EL FATIMI
Prénom : LOUBNA 
Groupe : 02  
Module : Programmation Web 2 — 2026/2027
### Exercice 2 - Sensibilité à la casse & Noms de variables
-Casse : En PHP, les noms de variables sont sensibles à la casse. `$note` et `$Note` désignent donc deux variables distinctes en mémoire.
- Variables valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
- Variables invalides : `$a!` (contient un caractère spécial `!`) et `$1a` (commence par un chiffre).

### Exercice 4 - Différence entre echo et var_dump
- `echo` convertit les valeurs en chaînes de caractères avant de les afficher. La valeur booléenne `true` donne `"1"`, tandis que `false` donne une chaîne vide `""` (rien n'apparaît à l'écran).
- `var_dump()` affiche le type de la variable ainsi que sa valeur brute, ce qui permet de voir explicitement `bool(false)`.

### Exercice 5 - Tests des moyennes
- `-1` : Note invalide
- `9` : Non validé
- `10` : Passable
- `12` : Assez bien
- `14` : Bien
- `16` : Très bien
- `21` : Note invalide
