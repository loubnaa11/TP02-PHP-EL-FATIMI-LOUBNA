<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <pre>
    <?php
    $v1 = 42;
    $v2 = "42";
    $v3 = 15.8;
    $v4 = true;
    $v5 = false;
    $v6 = null;

    echo " Examination des types \n";
    var_dump($v1, $v2, $v3, $v4, $v5, $v6);


    echo "\n--- Conversions de types ---\n";
    $c1 = (int)"42";
    $c2 = (int)15.8;
    $c3 = (string)42;
    var_dump($c1, $c2, $c3);

    
    echo "\n Affichage true / false \n";
    echo "true avec echo : " . $v4 . "\n";
    echo "false avec echo : " . $v5 . "\n";
    echo "true avec var_dump : "; var_dump($v4);
    echo "false avec var_dump : "; var_dump($v5);

    echo "\n Conversions en booléens \n";
    var_dump((bool)0, (bool)"0", (bool)"PHP", (bool)[]);
    ?>
    </pre>
</body>
</html>